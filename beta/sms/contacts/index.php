<!DOCTYPE html>
<html>
  <head>
    <title>Henry Harris</title>
    <link rel="stylesheet" href="/beta/assets/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese">
    <link rel="stylesheet" href="/beta/assets/style.css">

    <script src="/beta/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/beta/assets/js/sms.js"></script>
  </head>
  <body>
    <div class="sms-contacts">
      <h1>Contacts</h1>
      <form id="sms__form--contact" class="sms__form" autocomplete="off">
        <input type="text" name="name" placeholder="Name"></textarea>
        <input type="text" name="phone_number" placeholder="Phone number"></textarea>
        <input type="submit" value="Add">
        <p class="sms__form-result"></p>
      </form>

      <p id="sms-contacts__loading">Loading contacts...</p>
      <ul class="sms-contacts__list"></ul>
    </div>
  </body>
</html>
