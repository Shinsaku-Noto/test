<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <x-app-layout>
    <x-slot name="header">
            　（ヘッダー名）
        </x-slot>
        <body>
            <h1 class="title">編集画面</h1>
            <div class="content">
                <form action="/posts/{{ $post->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="content_title">
                        <h2>タイトル</h2>
                        <input type="text" name="post[title]" value="{{ $post->title }}"/>
                        <p class="title_error" style="color:red">
                            {{ $errors->first('post.title') }}
                        </p>
                    </div>
                    <div class="content_body">
                        <h2>本文</h2>
                        <textarea name="post[body]">{{ $post->body }}</textarea>
                        <p class="body_error" style="color:red">
                            {{ $errors->first('post.body') }}
                        </p>
                    </div>
                    <input type="submit" value="保存"/>
                </form>
            </div>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>
