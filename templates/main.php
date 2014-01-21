<!doctype html>
<html lang=en>
  <head>
    <?php include 'templates/_partials/head.php'; ?>
  </head>
  <body>
    <div id="venues">
      <?php foreach (get_venues() as $venue) { ?>
        <div id="<?= slugify($venue['name']); ?>" class="main_venue">
          <h2>
            <?php if(!empty($venue['url'])){ ?>
              <a target="_blank" href="<?= $venue['url'] ?>">
                <?= $venue['name'] ?>
              </a>
            <?php }else{ ?>
              <?= $venue['name'] ?>
            <?php } ?>
          </h2>
          <p>
            <?= $venue['desc'] ?>
          </p>
          <ul>
            <li><?= $venue['best_for']; ?></li>
            <li><?= $venue['type']; ?></li>
            <li><?= str_repeat('$', $venue['price']); ?></li>
            <li><?= $venue['address']; ?></li>
          </ul>
        </div>
      <?php } ?>
    </div>
    <div id="footer">
      <?php include 'templates/_partials/footer.php'; ?>
    </div>
  </body>
</html>
