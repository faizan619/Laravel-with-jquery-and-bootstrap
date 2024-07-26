@extends('bootstrap.master')
@section('title')
    Color and Typography
@endsection

@section('body')

    {{-- Container --}}
    <div class="container">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid veniam sed voluptas similique exercitationem accusantium saepe eos voluptatum quas! Obcaecati magni soluta voluptates facere reprehenderit vero repellendus quas nesciunt consectetur, autem dolore excepturi. Animi totam reiciendis consectetur ullam, reprehenderit ab aperiam doloribus inventore ratione! Id, dolor? Commodi alias odit expedita minus provident quod voluptas maxime possimus amet dolor id tenetur iusto ipsa, dolorem rerum cupiditate reprehenderit et dolore fuga facere repudiandae sequi saepe at. Sed quis accusamus, ratione natus voluptatibus itaque. Dicta iste ut quae at, harum fugiat nostrum facilis cupiditate quasi consequatur consequuntur accusantium suscipit placeat temporibus sed nobis deleniti. Dignissimos nam, tempora in adipisci impedit obcaecati velit. Harum consequatur magnam aut eveniet minima voluptates fugit labore quae natus expedita dolore non autem delectus possimus accusamus nihil beatae unde odit quasi, at voluptatum eaque corrupti. Vero accusamus id, distinctio quis mollitia ut odio cupiditate harum ullam, voluptate facilis quo eveniet praesentium aliquam nesciunt fuga pariatur et reiciendis qui? Praesentium, porro. Optio harum blanditiis alias repellendus dolores, assumenda omnis? Iste dolorum provident voluptatum cupiditate perferendis, cumque, at debitis quibusdam asperiores incidunt laboriosam velit iure explicabo amet deleniti non sapiente voluptas a perspiciatis. Tempore obcaecati minus tenetur beatae sunt, itaque ullam velit suscipit maiores praesentium adipisci iste architecto fuga unde tempora aut corporis magnam impedit assumenda eius nemo. Consequatur ipsam quisquam cumque quasi illum quae reprehenderit sed doloribus suscipit est autem iste amet a hic eos incidunt minus iusto molestiae placeat voluptatibus, laboriosam praesentium! Aspernatur totam a similique, autem repellat quo asperiores quasi eaque architecto eveniet soluta ab perspiciatis quidem incidunt pariatur labore cumque reprehenderit, dolorem ea laborum, numquam quibusdam ad mollitia. Quo, ipsa! Architecto asperiores error illum ratione officia quo similique dolores molestiae eum. Est nemo praesentium consectetur amet fugiat suscipit soluta, pariatur odit omnis consequuntur cum perferendis harum ea ullam rem cumque quasi ratione. Doloribus adipisci pariatur praesentium autem similique sit ipsam explicabo natus, perferendis voluptatum. Quis doloremque, inventore, odio quo expedita magni officiis voluptatem necessitatibus, ipsam dolorem quia repellat placeat repudiandae incidunt est. Alias aut cumque ipsum cum blanditiis odio. Maiores illum id, aliquam obcaecati dicta nemo eveniet molestias at eligendi repellat sunt architecto animi, quam alias, perspiciatis molestiae esse quis minima soluta! Totam ut neque exercitationem maiores ex obcaecati nihil recusandae ipsam itaque quaerat modi voluptates rerum quibusdam praesentium quia nulla illum qui minus cum, quidem cupiditate laborum consequuntur voluptatem? Alias qui repellendus atque laboriosam quidem non id dicta illo perferendis. Nesciunt nulla inventore iusto reiciendis consectetur, quaerat obcaecati quam! Similique, totam culpa. Quisquam harum officiis deleniti, dicta, quis est provident tenetur iure voluptate illum iste explicabo incidunt error corrupti culpa temporibus consectetur. Harum tenetur dolorem cupiditate debitis veritatis quaerat accusamus suscipit enim repellendus vitae? Nisi esse hic provident, dolor similique, dicta iste sapiente, magni assumenda error autem minus deleniti vel saepe. Neque repellat quis dolorem voluptatem laudantium assumenda iusto, autem cupiditate harum sequi quos recusandae omnis aperiam! Assumenda error non, perferendis veniam animi suscipit neque nihil, nisi, ab pariatur earum facilis. Ratione culpa repellendus laudantium ea.</div>
    

    {{-- margin & padding --}}
    <div class="bg-primary m-1 p-1">margin and padding</div>
    <div class="bg-primary m-2 p-2">margin and padding</div>
    <div class="bg-primary m-3 p-3">margin and padding</div>
    <div class="bg-primary m-4 p-4">margin and padding</div>
    <div class="bg-primary m-5 p-5">margin and padding</div>
    <div class="bg-primary mx-5">hello world</div>
    <div class="bg-primary ms-5">hello world</div>
    <div class="bg-primary me-5">hello world</div>
    <div class="bg-primary mt-5">hello world</div>
    <div class="bg-primary mb-5">hello world</div>
    <hr>

    {{-- borders --}}
    <div class="px-2 py-2 border">border here</div>
    <div class="px-2 py-2 border-top">border TOp</div>
    <div class="px-2 py-2 border-start">border TOp</div>
    <div class="px-2 py-2 border-end">border TOp</div>
    <div class="px-2 py-2 border-bottom">border TOp</div>
    <div class="m-2 p-2  border-2 border border-danger">border</div>
    <div class="p-3 m-3 rounded-pill border border-3">rounded</div>
    <hr>

    {{-- box shadow --}}
    <div class="m-2 p-2 shadow-sm">shadow here</div>
    <div class="m-2 p-2 shadow-lg">shadow here</div>

    <hr>

    {{-- font weight --}}
    <div class="fw-bold">bold</div>
    <div class="fw-border">border</div>
    <div class="fw-light">light</div>
    <div class="fst-italic">italic</div>
    <div class="fw-light fst-italic">light</div>

    <hr>

    {{-- button --}}
    <button class="btn btn-lg btn-success">large button</button>
    <button class="btn btn-sm btn-success">small button</button>
    <button class="btn btn-outline-primary">outline</button>
    <button class="btn btn-outline-danger">outline</button>
    {{-- button group --}}
    <br>
    <br>
    <div class="btn-group">
        <a href="#" class="btn btn-primary">button1</a>
        <a href="#" class="btn btn-primary">button2</a>
        <a href="#" class="btn btn-primary">button3</a>
    </div>
    <br>
    <br>
    <button class="btn btn-primary">Primary button</button>
    <button class="btn btn-secondary">secondary button</button>
    <button class="btn btn-info">info button</button>
    <button class="btn btn-warning">warning button</button>
    <button class="btn btn-success">success button</button>
    <button class="btn btn-danger">danger button</button>
    <button class="btn btn-muted">muted button</button>
    <hr>
    {{-- text color --}}
    <p class="text-primary">Theme primary color</p>
    <p class="text-secondary">Theme Secondary color</p>
    <p class="text-info">Theme info color</p>
    <p class="text-warning">Theme warning color</p>
    <p class="text-success">Theme success color</p>
    <p class="text-danger">Theme danger color</p>
    <p class="text-muted">Theme muted color</p>
    <hr>
    {{-- background color --}}
    <p class="bg-primary">Background primary color</p>
    <p class="bg-secondary">Background Secondary color</p>
    <p class="bg-info">Background info color</p>
    <p class="bg-warning">Background warning color</p>
    <p class="bg-success">Background success color</p>
    <p class="bg-danger">Background danger color</p>
    <p class="bg-muted">Background muted color</p>
    <hr>

    {{-- Text decoration & font weight --}}
    <p class="text-decoration-underline">this is underline text</p>
    <p class="text-decoration-line-through">this is line throught</p>
    <p class="fw-bold">Lorem ipsum dolor sit amet.</p>
    <small>Lorem ipsum dolor sit amet. </small>
    <hr>
    {{-- Lead tag & Alignment --}}
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

    <p class="lead text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <p class="lead text-end">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <p class="lead text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <hr>
    {{-- Heading Tag --}}
    <h1 class="h6">Heading 1</h1>
    <h2>Heading 2</h2>
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <h5>Heading 5</h5>
    <h6 class="h1">Heading 6</h6>
    <hr>
    {{-- Display Tag --}}
    <h1 class="display-1">Display 1 Heading</h1>
    <h1 class="display-2">Display 2 Heading</h1>
    <h1 class="display-3">Display 3 Heading</h1>
    <h1 class="display-4">Display 4 Heading</h1>
    <h1 class="display-5">Display 5 Heading</h1>
    <h1 class="display-6">Display 6 Heading</h1>
@endsection
