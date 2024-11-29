<section class="h1"><?php echo $title; ?></section>
<div class="products_img">
    <p><?php echo $product['title']; ?></p>
    <ul style="clear: both; margin-top: 20px;">
        <li><b>Цена</b>: - <?php echo number_format($product['price'], 2, ',', ' '); ?> рублей</li>
        <li><b>Контент</b>: - <?php echo $product['content']; ?></li>
    </ul>
</div>