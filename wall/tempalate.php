<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8">
    <title>Soren from the North</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700' type='text/css' media='all' />
    <meta property="og:title" content="Soren from the North" />
    <meta property="og:description" content="Chronicling the adventures of Soren and family - Protected for Family & Friends only." />
    <style type="text/css">
      * { box-sizing: border-box;}
      html{
        height: 100vh;
        overflow: hidden;
        font-family: Montserrat, "Helvetica Neue", sans-serif;
      }
      body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
      }
      main {
        max-width: 50%;
        text-align: center;
      }
      label {
        display: block;
      }
      input[type="text"] {
        padding: 10px;
        width: 100%;
        margin: 5px 0;
        box-shadow: inset 0 0 3px rgba(0,0,0,0.2);
        border: 2px solid #ccc;
        font-size: 1.3rem;
      }
      fieldset {
        text-align: left;
        border-radius: 3px;
        margin: 1rem 0;
      }
      legend {
        color: white;
        background-color: black;
        padding: .3rem;
      }

      #submit {
        padding: 10px;
        margin: 10px 0;
        font-size: 1.3rem;
        border: 2px solid #666;
        color: green;
        border-radius: 3px;
        text-transform: uppercase;
        font-weight: bold;
        font-family: Montserrat, "Helvetica Neue", sans-serif;
        -moz-appearance: none;
        -webkit-appearance: none;
      }
      #submit:hover {
        background-color: #eee;
      }
      #message{
        color: red;
        font-size: 1.5rem;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <main>
      <h1>Answer <em>one</em> of the following questions to enter.</h1>
      <form action="" method="post">
        <?php if (isset($message)) { echo "<p id='message'>$message</p>"; } ?>
        <fieldset>
          <legend>Question 1</legend>
          <label for="dog">What is the Heideheim dog named?</label>
          <input type="text" name="dog" id="dog" />
        </fieldset>
          <p style="margin-bottom:-1rem;">- OR -</p>
        <fieldset>
          <legend>Question 2</legend>
          <label for="city">What city did Adrienne and Justin live in 2016?</label>
          <input type="text" name="city" id="city" />
        </fieldset>
        <input type="submit" value="Submit" id='submit' />
      </form>
    </main>
  </body>
</html>