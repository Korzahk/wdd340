<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WDD-330-03 Block 2 Challenge: Online Aural Intonation Training</title>
  </head>
  <body>
    <h1><a href="../index.html">WDD 330 Portfolio</a></h1>
    <h2>Block 2 Challenge: Online Aural Intonation Training</h2>
    <p class="description">
        This is a free resource to develop your aural sense of intonation precision.
    </p>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.1/howler.min.js"></script>
    <script>
    var sound = new Howl({
      src: ['audio/p1'],
      volume: 1.0,
      onend: function () {
        alert('We finished with the setup!');
      }
    });
    sound.play()
    </script>
  </body>
</html>