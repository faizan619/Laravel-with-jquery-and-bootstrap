<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title> @yield('title')</title>
    <style>
        .container {
            border: 1px solid red;
        }

        .red {
            background-color: red;
        }

        .green {
            background-color: green;
        }

        .orange {
            background-color: orange
        }

        .yellow {
            background-color: yellow;
        }

        .blue {
            background-color: blue;
        }

        .black {
            background-color: black;
        }

        .tomato {
            background-color: tomato;
        }

        .pink {
            background-color: pink;
        }
    </style>
</head>

<body>
    <div class="container ">
        @yield('body')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

{{--

object-fit-cover
blockquote          img-fluid       img-thumbnail       table-striped-columns       table-hover      table-dark     text-truncate
table-bordered      <tbody class="table-group-divider">                             .text-primary-emphasis
<table class="table caption-top">
  <caption>List of users</caption>

<figure class="figure">
  <img src="..." class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">A caption for the above image.</figcaption>
</figure>

g-*	// for glutters

row-cols-2	// it will take only two col in one line

align-items-start // it is used in row like .row.align-items-start

align-self-start // it is used insode row>col 

justify-content-center || justify-content-around	// upper ka vertical alignment k liye and yai horizontal alignment k liye

<!-- Force next columns to break to new line -->
    <div class="w-100"></div>

col-auto me-auto	// margin is used in col same as padding

Overflow
overflow-auto           overflow-hidden     

Position
position.relative       position.absolute       position.static     position.fixed      position.sticky     
fixed-top               fixed-bottom            sticky-top

Width
w-25        w-50        w-75        w-100       w-auto      mw-100      min-vw-100

height
h-25        h-50        h-75        h-100       h-auto      mh-100      min-vh-100

Float
float-xl-left      float-xl-right       float-xl-none     float-xl-clearfix      
float-lg-left      float-lg-right       float-lg-none     float-lg-clearfix      
float-md-left      float-md-right       float-md-none     float-md-clearfix      
float-sm-left      float-sm-right       float-sm-none     float-sm-clearfix      
float-left         float-right          float-none        float-clearfix      

display
d-print-none      d-print-inline        d-inline-block      d-block     d-table     d-table-cell        d-table-row     d-flex      d-inline-flex
d-none      d-inline        d-inline-block      d-block     d-table     d-table-cell        d-table-row     d-flex      d-inline-flex
d-xl-none      d-xl-inline        d-inline-block      d-block     d-table     d-table-cell        d-table-row     d-flex      d-inline-flex
d-lg-none      d-lg-inline        d-inline-block      d-block     d-table     d-table-cell        d-table-row     d-flex      d-inline-flex
d-md-none      d-md-inline        d-inline-block      d-block     d-table     d-table-cell        d-table-row     d-flex      d-inline-flex
d-sm-none      d-sm-inline        d-inline-block      d-block     d-table     d-table-cell        d-table-row     d-flex      d-inline-flex



flex-xl-row     flex-lg-row     flex-md-row     flex-sm-row
flex-xl-row-reverse     flex-lg-row     flex-md-row     flex-sm-row-reverse
flex-xl-column     flex-lg-row     flex-md-row     flex-sm-column
flex-xl-column-reverse     flex-lg-row     flex-md-row     flex-sm-column-reverse
flex-xl-column-wrap     flex-lg-row     flex-md-row     flex-sm-column-wrap
flex-xl-column-nowrap     flex-lg-row     flex-md-row     flex-sm-column-nowrap

Vertical

align-self-start            align-self-end          align-self-center           align-self-stretch      align-self-baseline
align-self-xl-start            align-self-xl-end          align-self-xl-center           align-self-xl-stretch      align-self-xl-baseline
to
align-self-sm-start            align-self-sm-end          align-self-sm-center           align-self-sm-stretch      align-self-sm-baseline


align-content-start         align-content-end           align-content-center        align-content-between       align-content-around        align-content-stretch(default)
align-content-xl-start         align-content-xl-end           align-content-xl-center        align-content-xl-between       align-content-xl-around        align-content-xl-stretch(default)
to
align-content-sm-start         align-content-sm-end           align-content-sm-center        align-content-sm-between       align-content-sm-around        align-content-sm-stretch(default)



align-items-start           align-items-end             align-items-center         align-items-stretch(default)         align-items-baseline
align-items-xl-start        align-items-xl-end          align-items-xl-center      align-items-xl-stretch(default)      align-items-xl-baseline
align-items-lg-start        align-items-lg-end          align-items-lg-center      align-items-lg-stretch(default)      align-items-lg-baseline
align-items-md-start        align-items-md-end          align-items-md-center      align-items-md-stretch(default)      align-items-md-baseline
align-items-sm-start        align-items-sm-end          align-items-sm-center      align-items-sm-stretch(default)      align-items-sm-baseline


Horizontal

justify-content-center             justify-content-start              justify-content-end
justify-content-xl-center          justify-content-xl-start           justify-content-xl-end
justify-content-lg-center          justify-content-lg-start           justify-content-lg-end
justify-content-md-center          justify-content-md-start           justify-content-md-end
justify-content-sm-center          justify-content-sm-start           justify-content-sm-end


advance margin and padding
padding and margin value = 0-5
px-*    py-*    mx-*    my-*
px-xl-*    py-*       mx-*       my-xl-*
px-lg-*    py-lg-*    mx-lg-*    my-lg-*
px-md-*    py-md-*    mx-md-*    my-md-*
px-sm-*    py-sm-*    mx-sm-*    my-sm-*
px-xl-n*    pyn*        mx-n*       my-xl-n*
px-lg-n*    py-lg-n*    mx-lg-n*    my-lg-n*
px-md-n*    py-md-n*    mx-md-n*    my-md-n*
px-sm-n*    py-sm-n*    mx-sm-n*    my-sm-n*

no-gutters --> it will remove the default margin and padding in the class


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


col-xl-*	col-lg-*	col-md-*	col-sm-*

col-xl		col-lg		col-md		col-sm

col-1 		to		col-12


or
.row-cols-2	//same as break but in .w-100 we give manualy and in this it automatic takes break after 2 col

.w-100		// it can be like a break between cols

.col

.row

.container-fluid

.container



--}}
