<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Contact</title>
</head>
<body>
    <form action = "send-email.php"  method="post">
        <label for="name">Name </label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email </label>
        <input type="email" name="email" id="email" required>
        <label for="subject">Subject </label>
        <input type="subject" name="subject" id="subject" required>
        <label for="message">Message </label>
        <textarea name="message" id="message" required>
        </textarea>
        <br/>
        <button name="onsubmit" type="submit">
</form>
</body>
</html>