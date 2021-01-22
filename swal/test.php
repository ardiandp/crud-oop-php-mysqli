<!DOCTYPE html>
<html>
<head>
 <title>How to use sweet alert in PHP</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

 <!-- code sweet alert disini -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

</body>
</html>

<button class="btn btn-primary" onclick="sweetAlert()">Swall 1</button>

 <script type="text/javascript">

  function sweetAlert() 
  {  
   Swal.fire('Any fool can use a computer') 
  }

</script> <hr>


<button class="btn btn-primary" onclick="sweetAlert()">Swall 2</button>

 <script type="text/javascript">

  function sweetAlert() 
  {  
 Swal.fire(
    'Ini judul',
    'Ini text dibawah judul',
    'question'
   )
  }

</script> <hr>
<!-- 
<button class="btn btn-primary" onclick="sweetAlert()">Swall 3</button>
 <script type="text/javascript">

  function sweetAlert() 
  {  
   Swal.fire({
     type: 'error',
     title: 'Oops...',
     text: 'Something went wrong!',
     footer: '<a href>Ini footer!</a>'
   })
  }

</script> <hr>



<button class="btn btn-primary" onclick="swal4()">Swall 4</button>
 <script type="text/javascript">

  function swal4() 
  {  
   Swal.fire({
   Swal.fire({
    title: '<strong>HTML <u>example</u></strong>',
    type: 'info',
    html:
    'You can use <b>bold text</b>, ' +
    '<a href="//sweetalert2.github.io">links</a> ' +
    'and other HTML tags',
    showCloseButton: true,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonText:
    '<i class="fa fa-thumbs-up"></i> Great!',
    confirmButtonAriaLabel: 'Thumbs up, great!',
    cancelButtonText:
    '<i class="fa fa-thumbs-down"></i>',
    cancelButtonAriaLabel: 'Thumbs down'
   })
   })
  }

</script> <hr>

<button class="btn btn-primary" onclick="swal5()">Swall 5</button>
 <script type="text/javascript">

  function swal5() 
  {  
   Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
   }).then((result) => {
    if (result.value) {
     Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
      )
    }
   })
   })
  }

</script> <hr>


-->

