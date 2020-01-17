<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>エロい本棚</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/main_page.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <header>
          <div class="main_title">
            例のアレ
          </div>
        </header>
        <div class=".main_content_box_show">
          <div class="title_show">{{$title->title}}</div>
            @foreach ($books as $book)
              <div class="content_box_sow">
                <div class="image_box_sow">
                  <img src="" class="ero_box_show">
                </div>
              </div>
            @endforeach
        </div>
        <footer>
        </footer>
    </body>
</html>
