@extends('layouts.admin')


@section('content')

    <h3>Posts</h3>
   <table class="table table-striped table-hover table-bordered">
       <thead>
           <tr>
               <th>Id</th>
               <th>Author</th>
               <th>Category Id</th>
               <th>Photo Id</th>
               <th>Post Title</th>
               <th>Content</th>
               <th>Created at</th>
               <th>Updated at</th>
           </tr>
       </thead>
       <tbody>

        @if($posts)
            @foreach($posts as $post)
           <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category_id}}</td>
                <td>{{$post->photo_id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForhumans()}}</td>
                <td>{{$post->updated_at->diffForhumans()}}</td>
           </tr>
           @endforeach
        @endif
       </tbody>
   </table>

@endsection


