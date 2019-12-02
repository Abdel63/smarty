<?php
/* Smarty version 3.1.33, created on 2019-09-12 10:15:44
  from 'C:\laragon\www\Smarty\contain-t-shirts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7a1ad04b3da4_34304488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20769d6dc23558a838c760c0bbd2c904a653ccc3' => 
    array (
      0 => 'C:\\laragon\\www\\Smarty\\contain-t-shirts.tpl',
      1 => 1568283008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7a1ad04b3da4_34304488 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="main.css" />
<!-- Nos produits Grid Items -->
<div class="row mt-4 divProduitsConteneur">
  <!-- Nos produits Item 1 -->
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
    <div class="col-md-6 col-lg-4">
      <div 
      class="portfolio-item mx-auto" 
      data-toggle="modal" 
      data-target="#modalTshirts<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
        <div class="portfolio-item-caption d-flex align-items-center justify-content-center w-100">
        </div>

        <img id="tshirt<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="img-fluid mx-auto mb-4 cartes" src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="t-shirt-man" />
      </div>

      <div id="modalTshirts<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="modalT">
        <div class="modal-content">
          <span class="close croix">&times;</span>
          <div class="contenuImgetText">
            <div class="imgDiv">
              <img class="img-fluid mx-auto mb-4 cartes" src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="t-shirt-man" />
            </div>
            <div class="divText">
              <p id="prixT<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="prixT"><?php echo $_smarty_tpl->tpl_vars['product']->value['prix'];?>
€</p>
              <p>
                <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>





  <!-- Nos produits Item 2 -->

  <!-- <div class="col-md-6 col-lg-4">
    <div
      class="portfolio-item mx-auto"
      data-toggle="modal"
      data-target="#portfolioModal2"
    >
      <div
        class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"
      ></div>

      <img
        id="tshirt2"
        class="img-fluid cartes"
        src="images/t-shirts/fila_188057_687217_M67_20190703T121924_01.jpg"
        alt="t-shirts-man"
      />
    </div>
  </div>
  <div id="modalTshirts1" class="modalT">
    <div id="modal-content">
      <span class="close1 croix">&times;</span>
      <div id="contenuImgetText">
        <div id="imgDiv">
          <img
            class="img-fluid mx-auto mb-4 cartes sm-"
            src="images/t-shirts/fila_188057_687217_M67_20190703T121924_01.jpg"
            alt="t-shirt-man"
          />
        </div>
        <div id="divText">
          <p id="prixT1" class="prixT">29€</p>
          <p>
            ergzrtsdjkgs kjkjf hquezheiluf qgzlisgfvuimq zgrh emuq gflyq
            gifeliqzuke fylq zgfeds sqfh qziu uigyhki iuly gyukg kgy
          </p>
        </div>
      </div>
    </div>
  </div>

  Nos produits Item 3
  <div class="col-md-6 col-lg-4">
    <div
      class="portfolio-item mx-auto"
      data-toggle="modal"
      data-target="#portfolioModal3"
    >
      <div
        class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"
      ></div>
      <a href="">
        <img
          class="img-fluid cartes"
          src="images/t-shirts/final-club_157796_FINAL-106_20181116T123149_01.jpg"
          alt="t-shirts-man"
      /></a>
    </div>
  </div>

  Nos produits Item 4
  <div class="col-md-6 col-lg-4">
    <div
      class="portfolio-item mx-auto"
      data-toggle="modal"
      data-target="#portfolioModal4"
    >
      <div
        class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"
      ></div>
      <a href="">
        <img
          class="img-fluid mb-4 cartes"
          src="images/t-shirts/final-club_182594_FINAL-253_20190620T164640_01.jpg"
          alt="pants"
        />
      </a>
    </div>
  </div>

  Nos produits Item 5
  <div class="col-md-6 col-lg-4">
    <div
      class="portfolio-item mx-auto"
      data-toggle="modal"
      data-target="#portfolioModal5"
    >
      <div
        class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"
      ></div>
      <a href="">
        <img
          class="img-fluid mb-4 cartes"
          src="images/t-shirts/adidas_130171_cw1203_20180828T181415_01.jpg"
          alt="pants"
      /></a>
    </div>
  </div>

  Nos produits Item 6
  <div class="col-md-6 col-lg-4">
    <div
      class="portfolio-item mx-auto"
      data-toggle="modal"
      data-target="#portfolioModal6"
    >
      <div
        class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"
      ></div>
      <a href="">
        <img
          class="img-fluid mb-4 cartes"
          src="images/t-shirts/lbo_181051_FAB_SHALBO-727_20190527T165921_01.jpg"
          alt="pants"
      /></a>
    </div>
  </div>

  <!-- Nos produits Item 7 -->

  <!-- <div class="col-md-6 col-lg-4">
    <div
      class="portfolio-item mx-auto"
      data-toggle="modal"
      data-target="#portfolioModal6"
    >
      <div
        class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"
      ></div>
      <a href="">
        <img
          class="img-fluid mb-4 cartes"
          src="images/t-shirts/nasa_173220_NASA_TS_TAPE_TRICOL_NAVYBLCROU_20190307T083855_01.jpg"
          alt="accessoires-man"
      /></a>
    </div>
  </div> -->

  <!-- Nos produits Item 8 -->
  <!-- 
  <div class="col-md-6 col-lg-4">
    <div
      class="portfolio-item mx-auto"
      data-toggle="modal"
      data-target="#portfolioModal6"
    >
      <div
        class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"
      ></div>
      <a href="">
        <img
          class="img-fluid cartes"
          src="images/t-shirts/tommy-jeans_170036_UM0UM01170_990_TP_20190307T163352_01.jpg"
          alt="accessoires-man"
      /></a>
    </div>
  </div> -->

  <!-- Nos produits Item 9 -->

  <!-- <div class="col-md-6 col-lg-4">
    <div
      class="portfolio-item mx-auto"
      data-toggle="modal"
      data-target="#portfolioModal6"
    >
      <div
        class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"
      >
        <div class="portfolio-item-caption-content text-center text-white">
          <i class="fas fa-plus fa-3x"></i>
        </div>
      </div>
      <a href="">
        <img
          class="img-fluid cartes"
          src="images/t-shirts/uniplay_143034_fab18-up-t282-blk_20180903T152339_01.jpg"
          alt="accessoires-man"
      /></a>
    </div>
  </div> -->
</div>

<?php echo '<script'; ?>
>
  var modal = document.getElementById("modalTshirts");
  var tshirt1 = document.getElementById("tshirt1");
  var span = document.getElementsByClassName("close")[0];
  tshirt1.addEventListener("click", function() {
    modal.style.display = "block";
  });
  span.addEventListener("click", function() {
    modal.style.display = "none";
  });
  window.addEventListener("click", function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  });

  // var modal1 = document.getElementById("modalTshirts1");
  // var tshirt2 = document.getElementById("tshirt2");
  // var span1 = document.getElementsByClassName("close1")[0];
  // tshirt2.addEventListener("click", function() {
  //   modal1.style.display = "block";
  // });
  // span1.addEventListener("click", function() {
  //   modal1.style.display = "none";
  // });
  // window.addEventListener("click", function(event) {
  //   if (event.target == modal) {
  //     modal1.style.display = "none";
  //   }
  // });
<?php echo '</script'; ?>
><?php }
}
