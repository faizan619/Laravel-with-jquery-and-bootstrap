<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .container {
            border: 2px solid red;
        }

        .col {
            border: 1px solid black;
        }

        .col-2 {
            border: 1px solid darkgreen;
        }

        .col-md-3 {
            border: 1px solid red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-3">this is me</div>
            <div class="col-md-3">me is this</div>
            <div class="col-md-3">me is me</div>
        </div>
    </div>
    <div class="container">
        {{-- <div class="row">
            <div class="col-lg-6 offset-lg-3 col-2 ">first col</div>
            <div class="offset-lg-2 col-5">second col</div>
            <div class="col-2">third col</div>
            <div class="col-3 order-first">forth col</div>
        </div> --}}
        <div class="row">
            {{-- <div class="col-3 order-lg-last">col 1</div>
            <div class="col-3 order-lg-first">col 2</div>
            <div class="col-3 ">col 3</div>
            <div class="col-3">col 4</div> --}}
            <div class="col-3 m-auto ">col 1</div>
        </div>
        <div class="row">
            <div class="m-lg-auto m-md-l-auto mt-5 col-3"> col 3</div>
            {{-- <div class="ml-auto col-3 ">col 1</div> --}}
        </div>
        <div class="row">second col </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

{{-- 

Vertical

align-items-start           align-items-end             align-items-center         align-items-stretch(default)         align-items-baseline
align-items-xl-start        align-items-xl-end          align-items-xl-center      align-items-xl-stretch(default)      align-items-xl-baseline
align-items-lg-start        align-items-lg-end          align-items-lg-center      align-items-lg-stretch(default)      align-items-lg-baseline
align-items-md-start        align-items-md-end          align-items-md-center      align-items-md-stretch(default)      align-items-md-baseline
align-items-sm-start        align-items-sm-end          align-items-sm-center      align-items-sm-stretch(default)      align-items-sm-baseline


align-content-start         align-content-end           align-content-center        align-content-between       align-content-around        align-content-stretch(default)

Horizontal

justify-content-center             justify-content-start              justify-content-end
justify-content-xl-center          justify-content-xl-start           justify-content-xl-end
justify-content-lg-center          justify-content-lg-start           justify-content-lg-end
justify-content-md-center          justify-content-md-start           justify-content-md-end
justify-content-sm-center          justify-content-sm-start           justify-content-sm-end




paddding = 0 - 5
p-*        pr-*        pl-*        pt-*        pb-*
p-xl-*     pr-xl-*     pl-xl-*     pt-xl-*     pb-xl-*
p-lg-*     pr-lg-*     pl-lg-*     pt-lg-*     pb-lg-* 
p-md-*     pr-md-*     pl-md-*     pt-md-*     pb-md-* 
p-sm-*     pr-sm-*     pl-sm-*     pt-sm-*     pb-sm-* 

n = 1,5
m-xl-n*     mr-xl-n*     ml-xl-n*     mt-xl-n*     mb-xl-n*
m-lg-n*     mr-lg-n*     ml-lg-n*     mt-lg-n*     mb-lg-n* 
m-md-n*     mr-md-n*     ml-md-n*     mt-md-n*     mb-md-n* 
m-sm-n*     mr-sm-n*     ml-sm-n*     mt-sm-n*     mb-sm-n* 

margin = 0 - 5
m-xl-*     mr-xl-*     ml-xl-*     mt-xl-*     mb-xl-*
m-lg-*     mr-lg-*     ml-lg-*     mt-lg-*     mb-lg-* 
m-md-*     mr-md-*     ml-md-*     mt-md-*     mb-md-* 
m-sm-*     mr-sm-*     ml-sm-*     mt-sm-*     mb-sm-* 

m-auto     m-xl-auto   m-lg-auto   m-md-auto   m-sm-auto

order-first     , order-last
order-xl-first  , order-xl-last
order-lg-first  , order-lg-last
order-md-first  , order-md-last
order-sm-first  , order-sm-last
order-xl-*  , order-xl-*
order-lg-*  , order-lg-*
order-md-*  , order-md-*
order-sm-*  , order-sm-*

offset-1                                        offset-12

offset-xl-*     offset-lg-*     offset-md-*     offset-sm-*

--}}
