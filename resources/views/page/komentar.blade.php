@extends('layout.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="fontAwesome/css/font-awesome.css">
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <template class="reply-input-template">
   <div class="reply-input container">
   <img src="../img/avaars/image-juliusomo.png" alt="user"class="use-img"></div>
   <textarea class="cmnt-input" placeholder="Add a comment..."></textarea>
   <button class="bu-primary">SEND</button>
   </template>

   <template class="comment-template">
      <div class="comment-wrp">
         <div class="comment container">
            <div class="c-score">
               <img src="../img/icon-plus.svg" alt="plus" class="score-control scrore-plus">
               <p class="score-number">5</p>
               <img src=".././img/icon-minus.svg" alt="minus" class="score-control score-minus">
            </div>
            <div class="c-controls">
               <div class="delete">
                  <img src="images/icon-delete.svg" alt="delete" class="control-icon">
                  Delete
               </div>
               <div class="edit">
                  <img src="images/icon-edit.svg" alt="edit" class="control-icon">
                  Edit
               </div>
               <div class="reply">
                  <img src="images/icon-reply.svg" alt="reply" class="control-icon">
                  Reply
               </div>
            </div>
            <div class="c-user">
               <img src="/images/avatars/image-maxblagun.png" alt="user" class="usr-img">
               <p class="usr-name">maxblagun</p>
               <p class="cmnt-at">2 weeks ago</p>
            </div>
            
         </div>
      </div>
   </template>
</body>
</html>
@endsection