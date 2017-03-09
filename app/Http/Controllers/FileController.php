<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
	public function auth($url)
	{
		$file = File::where('short_url', $url)->firstOrFail();
		if ($file) {
			return view('file.authorize', compact('file'));
		}
	}

	public function show(Request $request)
	{
		$file = File::where('short_url', $request->get('short_url'))->firstOrFail();

		if ($file && decrypt($file->password) == $request->get('password')) {
			$tempImage = tempnam(sys_get_temp_dir(), $file->name);
			copy($file->url, $tempImage);

			return response()->download($tempImage, $file->name);
		}

		return back()->with('status', 'Falsches Passwort!');
	}

	public function store(Request $input)
	{
		$data = $input->get('data')[0];
		$password = $input->get('password');

		$file = new File();
		$file->name = $data['name'];
		$file->url = $data['url'];
		$file->short_url = str_replace('https://cdn.filestackcontent.com/', '', $file->url);
		$file->password = encrypt($password);
		$file->user_id = Auth::user()->id;
		$file->save();

		return $file;
	}
}
