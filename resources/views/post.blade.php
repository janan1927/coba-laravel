@extends('layouts.main')

@section('container')
    
    <h2>{{ $post->title }}</h2>    

    <p>By. Shandika galih in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
    
       

    <a href="/blog/"><p>Back To Post</p></a>
@endsection



{{-- Post::create([
    'title' => 'Judul Ke Ketiga',
    'excerpt' => 'Lorem Ketigam Kedua.',
    'slug' => 'judul-ketiga',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia animi voluptate a, laudantium minima, accusamus itaque, eveniet assumenda similique suscipit quisquam perferendis autem aperiam neque aut praesentium perspiciatis? Nemo aut nisi aliquam.</p> <p> A in exercitationem perspiciatis itaque voluptatem aliquid molestias! Adipisci numquam obcaecati doloribus ut in est modi nemo officia velit, corporis praesentium aut, minus temporibus eveniet! Sequi veniam magni reiciendis! Odio iure, voluptatum ab maiores deserunt quibusdam dolorum voluptatibus ipsam suscipit quae vel quam iste provident assumenda cumque voluptatem facilis dolor repellendus quia odit velit autem facere nemo eaque? Dolorum, et vitae. Maxime, enim cumque. </p> <p> Ipsam maiores officiis consequuntur consequatur natus esse cum, totam ipsa reiciendis perspiciatis voluptates, debitis assumenda perferendis delectus minus excepturi dignissimos eius nesciunt est magnam ullam nam autem obcaecati reprehenderit. Temporibus accusantium commodi hic debitis quod eveniet tempore quisquam veritatis quia animi, voluptates fugiat dicta similique atque est voluptate velit deserunt recusandae. Aspernatur, quasi blanditiis.</p>'
]) --}}