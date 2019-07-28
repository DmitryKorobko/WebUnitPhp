<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>List of posts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <h1 style="text-align: center">List of posts</h1>
      <table>
        <thead>
          <th>Title:</th>
          <th>Description:</th>
          <th>Image:</th>
          <th>Author:</th>
        </thead>
      <?php foreach ($posts as $post) { ?>
          <tbody>
            <tr>
              <td><b><?= $post->title; ?></b></td>
              <td><b><?= $post->description; ?></b></td>
              <td><img height="48px" width="64px" src="<?= $post->image; ?>" alt="Image"></td>
              <td><b><?= $post->user->name; ?></b></td>
            </tr>
          </tbody>
      <?php } ?>
      </table>
    </body>
</html>
