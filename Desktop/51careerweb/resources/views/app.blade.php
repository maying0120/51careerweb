
<!DOCTYPE html>
<html lang="en">

<head>
  @include('user/layouts/head')

</head>
 @include('user/layouts/navigation')

<body>

     <!-- Main Content -->
     <div class="container">
       <div class="row">
         <div class="col-lg-8 col-md-10 mx-auto">
           <div class="post-preview">

               <a href="{{ route('post') }}">
               <h2 class="post-title">
                 Man must explore, and this is exploration at its greatest
               </h2>
               <h3 class="post-subtitle">
                 Problems look mighty small from 150 miles up
               </h3>
             </a>
             <p class="post-meta">Posted by
               <a href="#">Start Bootstrap</a>
               on September 24, 2019</p>
           </div>
           <hr>
           <div class="post-preview">
             <a href="post.html">
               <h2 class="post-title">
                 I believe every human has a finite number of heartbeats.
               </h2>
             </a>
             <p class="post-meta">Posted by
               <a href="#">Start Bootstrap</a>
               on September 18, 2019</p>
           </div>
           <hr>
           <div class="post-preview">
             <a href="post.html">
               <h2 class="post-title">
                 Science has not yet mastered prophecy
               </h2>
               <h3 class="post-subtitle">
                 We predict too much for the next year and yet far too little for the next ten.
               </h3>
             </a>
             <p class="post-meta">Posted by
               <a href="#">Start Bootstrap</a>
               on August 24, 2019</p>
           </div>
           <hr>
           <div class="post-preview">
             <a href="post.html">
               <h2 class="post-title">
                 Failure is not an option
               </h2>
               <h3 class="post-subtitle">
                 Many say exploration is part of our destiny, but it’s actually our duty to future generations.
               </h3>
             </a>
             <p class="post-meta">Posted by
               <a href="#">Start Bootstrap</a>
               on July 8, 2019</p>
           </div>
           <hr>
           <!-- Pager -->
           <div class="clearfix">
             <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
           </div>
         </div>
       </div>
     </div>

     <hr>


    @include('user/layouts/footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('user/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('user/js/clean-blog.min.js') }}"></script>

</body>

</html>
