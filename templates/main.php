<!doctype html>
<html lang=en>
  <head>
    <?php include 'templates/_partials/head.php'; ?>
  </head>
  <body>
    <div id="head" class="dim">
      <h1><?= $config['site_title']; ?></h1>
      <h5>by <?= $config['author_link']; ?></h5>
    </div>
    <div id="venues">
      <?php foreach (get_venues() as $venue) { ?>
        <div id="<?= slugify($venue['name']); ?>" class="venue">
          <h3>
            <?php if(!empty($venue['url'])){ ?>
              <a target="_blank" href="<?= $venue['url'] ?>">
                <?= $venue['name'] ?>
              </a>
            <?php }else{ ?>
              <?= $venue['name'] ?>
            <?php } ?>
          </h3>
          <blockquote>
            "<?= $venue['desc'] ?>"
          </blockquote>
          <div class="info">
            <?= $venue['best_for']; ?> - <?= $venue['type']; ?> - <?= str_repeat('$', $venue['price']); ?> - <?= $venue['address']; ?>
          </div>
        </div>
      <?php } ?>
    </div>
    <?php include 'templates/_partials/footer.php'; ?>
  </body>
</html>
