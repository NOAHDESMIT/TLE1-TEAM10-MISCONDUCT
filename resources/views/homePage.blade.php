<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Home</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="/app.css">
<body>

<div class="body">
<<<<<<< Updated upstream
    @foreach($users as $user)
        <h2>Hoi {{$user->name}} </h2>
    @endforeach
    <div class="link-buttons">
        <a href="{{ route('journal') }}">
            <button type="button"> JOURNAL</button>
        </a>
        <a href="/inbox.php">
            <button type="button"> INBOX</button>
        </a>
    </div>

    <h2> Hoe gaat het vandaag?</h2>
    <div class="response-buttons">
        <button> Goed!</button>
        <button> Niet zo</button>
        <button> Weet ik niet</button>
    </div>

    <div class="articles">
        <article>
            <img src="" alt="image">
            <h1>Lorem ipsum</h1>
        </article>

        <article>
            <img src="" alt="image">
            <h1>Lorem ipsum</h1>
        </article>

    </div>
=======

<h2>Hoi {$name} </h2>

<div class= "link-buttons">
<a href="/melden.php"><button type="button"> MELDEN </button></a>
<a href="/inbox.php"><button type="button"> INBOX </button></a>
</div>

<h2> Hoe gaat het vandaag?</h2>
<div class="response-buttons">
<button> Goed!</button>
<button> Niet zo</button>
<button> Weet ik niet </button>
</div>

<div class"articles">
    <a href="/article.php">
    <article>
    <img >
    <h1>Lorem ipsum </h1>
    </article>
    </a>


</div>
>>>>>>> Stashed changes

</div>

</body>
</html>
