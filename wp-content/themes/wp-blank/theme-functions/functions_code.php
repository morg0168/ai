<?php
/*------------------------------------*\
	Add custom block in Portal
\*------------------------------------*/

add_action('add_meta_boxes', 'add_portal_block_meta');
function add_portal_block_meta()
{
    global $post;

    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if($pageTemplate == 'template-code.php' )
        {
            add_meta_box(
                'portal_block', // $id
                'Custom Portal content', // $title
                'display_portal_block_meta', // $callback
                'page', // $page
                'normal', // $context
                'high'); // $priority
        }
    }
}

function display_portal_block_meta()
{

	global $post;
    $portal_block = get_post_meta( $post->ID, 'portal_block' , true); ?>
	<input type="hidden" name="portal_block_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <div class="col-1-3">
      <h1>DOCUMENTS</h1>
      <label for="portal_block[level1a]">SECTION </label>
      <br/>
      <input type="text" name="portal_block[level1a]" id="portal_block[level1a]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['level1a'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>

<!--DOCUMENTS - BLOCK ONE-->

      <?php
          $max_posts = 9;
          for ($i = 1; $i <= $max_posts; $i++) {
             $keyname = 'l1name' . $i;
             $keylink = 'l1link' . $i;
      ?>
      <label for="portal_block[<?php echo $keyname; ?>]">DOCUMENT NAME </label>
      <br/>

      <input type="text" name="portal_block[<?php echo $keyname; ?>]" id="portal_block[<?php echo $keyname; ?>]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['l1name' . $i];
      } ?>" placeholder="Edit">

      <label for="portal_block[<?php echo $keylink; ?>]">LINK </label>
      <br/>
      <input type="text" name="portal_block[<?php echo $keylink; ?>]" id="portal_block[<?php echo $keylink; ?>]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['l1link' . $i];
      } ?>" placeholder="Edit">
        <br/>
        <br/>
        <br/>
    <?php } ?>
</div>

<!--FINANCES - BLOCK 2 :: A-->
  <div class="col-1-3">
      <h1>Finances</h1>

      <h3><label for="portal_block[level2a]">YEAR 1</label></h3>
        <br/>
        <input type="text" name="portal_block[level2a]" id="portal_block[level2a]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
            echo $portal_block['level2a'];
        } ?>" placeholder="Edit">
        <br/>
        <br/>

        <label for="portal_block[l2date1]">DATE </label>
        <input type="text" name="portal_block[l2date1]" id="portal_block[l2date1]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
            echo $portal_block['l2date1'];
        } ?>" placeholder="Edit">
        <br/>
        <br/>

        <?php
          $max_posts = 3;
          for ($i = 1; $i <= $max_posts; $i++) {
            $portalDate = 'l2date' . $i;
            $portalName = 'l2name' . $i;
            $portalLink = 'l2link' . $i;
        ?>

        <label for="portal_block[<?php echo $portalName; ?>]">DOCUMENT NAME </label>
        <br/>
        <input type="text" name="portal_block[<?php echo $portalName; ?>]" id="portal_block[<?php echo $portalName; ?>]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
            echo $portal_block['l2name' . $i];
        } ?>" placeholder="Edit">

        <label for="portal_block[<?php echo $portalLink; ?>]">LINK</label>
        <br/>
        <input type="text" name="portal_block[<?php echo $portalLink; ?>]" id="portal_block[<?php echo $portalLink; ?>]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
            echo $portal_block['l2link' . $i];
        } ?>" placeholder="Edit">
        <br/>
        <br/>
        <br/>
      <?php  }?>

<!--FINANCES - BLOCK 2 :: B-->

      <h3><label for="portal_block[level2b]">YEAR 2</label></h3>
        <br/>

        <label for="portal_block[l2date2]">DATE </label>
        <input type="text" name="portal_block[l2date2]" id="portal_block[l2date2]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
            echo $portal_block['l2date2'];
        } ?>" placeholder="Edit">
        <br/>
        <br/>

        <?php
          $max_posts = 6;
          for ($i = 4; $i <= $max_posts; $i++) {
            $portalDate = 'l2date' . $i;
            $portalName = 'l2name' . $i;
            $portalLink = 'l2link' . $i;
        ?>

        <label for="portal_block[<?php echo $portalName; ?>]">DOCUMENT NAME </label>
        <br/>
        <input type="text" name="portal_block[<?php echo $portalName; ?>]" id="portal_block[<?php echo $portalName; ?>]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
            echo $portal_block['l2name' . $i];
        } ?>" placeholder="Edit">

        <label for="portal_block[<?php echo $portalLink; ?>]">LINK</label>
        <br/>
        <input type="text" name="portal_block[<?php echo $portalLink; ?>]" id="portal_block[<?php echo $portalLink; ?>]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
            echo $portal_block['l2link' . $i];
        } ?>" placeholder="Edit">
        <br/>
        <br/>
        <br/>
      <?php  }?>

      <!--FINANCES - BLOCK 3 :: C-->

      <h3><label for="portal_block[level2c]">YEAR 3</label></h3>
        <br/>

        <label for="portal_block[l2date3]">DATE </label>
        <input type="text" name="portal_block[l2date3]" id="portal_block[l2date3]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
            echo $portal_block['l2date3'];
        } ?>" placeholder="Edit">
        <br/>
        <br/>

        <?php
          $max_posts = 9;
          for ($i = 7; $i <= $max_posts; $i++) {
            $portalDate = 'l2date' . $i;
            $portalName = 'l2name' . $i;
            $portalLink = 'l2link' . $i;
        ?>

        <label for="portal_block[<?php echo $portalName; ?>]">DOCUMENT NAME </label>
        <br/>
        <input type="text" name="portal_block[<?php echo $portalName; ?>]" id="portal_block[<?php echo $portalName; ?>]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
            echo $portal_block['l2name' . $i];
        } ?>" placeholder="Edit">

        <label for="portal_block[<?php echo $portalLink; ?>]">LINK</label>
        <br/>
        <input type="text" name="portal_block[<?php echo $portalLink; ?>]" id="portal_block[<?php echo $portalLink; ?>]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
            echo $portal_block['l2link' . $i];
        } ?>" placeholder="Edit">
        <br/>
        <br/>
        <br/>
      <?php  }?>
</div>

  <!--ASSEMBLES GENERALES - BLOCK 1 :: A-->
  <div class="col-1-3">
    <h1>Assembles generales</h1>
      <br/>
      <input type="text" name="portal_block[level3a]" id="portal_block[level3a]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['level3a'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>

      <h3><label for="portal_block[level3a]">YEAR 1</label></h3>

      <label for="portal_block[l3date1]">DATE </label>
      <input type="text" name="portal_block[l3date1]" id="portal_block[l3date1]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['l3date1'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>

      <?php
        $max_posts = 2;
        for ($i = 1; $i <= $max_posts; $i++) {
          $portalName = 'l3name' . $i;
          $portalLink = 'l3link' . $i;
      ?>
      <label for="portal_block[<?php echo $portalName; ?>]">DOCUMENT NAME </label>
      <br/>
      <input type="text" name="portal_block[<?php echo $portalName; ?>]" id="portal_block[<?php echo $portalName; ?>]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['l3name' . $i];
      } ?>" placeholder="Edit">

      <label for="portal_block[<?php echo $portalLink; ?>]">LINK</label>
      <br/>
      <input type="text" name="portal_block[<?php echo $portalLink; ?>]" id="portal_block[<?php echo $portalLink; ?>]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['l3link' . $i];
      } ?>" placeholder="Edit">
      <br/>
      <br/>
      <br/>
    <?php  }?>

  <!--ASSEMBLES GENERALES - BLOCK 2 :: B-->

    <h3><label for="portal_block[level3b]">YEAR 2</label></h3>
      <br/>

      <label for="portal_block[l3date2]">DATE </label>
      <input type="text" name="portal_block[l3date2]" id="portal_block[l3date2]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['l3date2'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>

      <?php
        $max_posts = 4;
        for ($i = 3; $i <= $max_posts; $i++) {
          $portalName = 'l3name' . $i;
          $portalLink = 'l3link' . $i;
      ?>

      <label for="portal_block[<?php echo $portalName; ?>]">DOCUMENT NAME </label>
      <br/>
      <input type="text" name="portal_block[<?php echo $portalName; ?>]" id="portal_block[<?php echo $portalName; ?>]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['l3name' . $i];
      } ?>" placeholder="Edit">

      <label for="portal_block[<?php echo $portalLink; ?>]">LINK</label>
      <br/>
      <input type="text" name="portal_block[<?php echo $portalLink; ?>]" id="portal_block[<?php echo $portalLink; ?>]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['l3link' . $i];
      } ?>" placeholder="Edit">
      <br/>
      <br/>
      <br/>
    <?php  }?>

  <!--ASSEMBLES GENERALES - BLOCK 3 :: C-->

    <h3><label for="portal_block[level3c]">YEAR 3</label></h3>
      <br/>

      <label for="portal_block[l3date3]">DATE </label>
      <input type="text" name="portal_block[l3date3]" id="portal_block[l3date3]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['l3date3'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>

      <?php
        $max_posts = 6;
        for ($i = 5; $i <= $max_posts; $i++) {
          $portalName = 'l3name' . $i;
          $portalLink = 'l3link' . $i;
      ?>

      <label for="portal_block[<?php echo $portalName; ?>]">DOCUMENT NAME </label>
      <br/>
      <input type="text" name="portal_block[<?php echo $portalName; ?>]" id="portal_block[<?php echo $portalName; ?>]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['l3name' . $i];
      } ?>" placeholder="Edit">

      <label for="portal_block[<?php echo $portalLink; ?>]">LINK</label>
      <br/>
      <input type="text" name="portal_block[<?php echo $portalLink; ?>]" id="portal_block[<?php echo $portalLink; ?>]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['l3link' . $i];
      } ?>" placeholder="Edit">
      <br/>
      <br/>
      <br/>
    <?php  }?>
    </div>

  <?php } ?>
<?php
/*Save custom fields in DB*/
  function save_portal_block_function( $post_id ) {
	// verify nonce
	if ( isset($_POST['portal_block_nonce']) && !wp_verify_nonce( $_POST['portal_block_nonce'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if ( 'page' === $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
	}

  if (isset($_POST['portal_block_nonce'])){
    $old = get_post_meta( $post_id, 'portal_block', true );
    $new = $_POST['portal_block'];

    if ( $new && $new !== $old ) {
      update_post_meta( $post_id, 'portal_block', $new );
    } elseif ( '' === $new && $old ) {
      delete_post_meta( $post_id, 'portal_block', $old );
    }
  }

}
add_action( 'save_post', 'save_portal_block_function' );

?>
