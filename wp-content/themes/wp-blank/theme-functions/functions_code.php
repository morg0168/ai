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
      <h4>Block #1</h4>
      <label for="portal_block[title1]">Title - H2</label>
      <br/>
      <input type="text" name="portal_block[title1]" id="portal_block[title1]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['title1'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>
      <label for="portal_block[icon1]">Icon class from FontAwesome Library - <a href="http://fontawesome.io/cheatsheet/" target="_blank">View cheatsheet</a></label>
      <br/>
      <input type="text" name="portal_block[icon1]" id="portal_block[icon1]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['icon1'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>

      <label for="portal_block[textarea1]">Text Content</label>
      <br/>

        <textarea type="textarea" name="portal_block[textarea1]" id="portal_block[textarea1]" class="textarea-admin" >
        <?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['textarea1'];
        } else{ ?> Edit  <?php }?>
        </textarea>
      </div>

      <div class="col-1-3">
      <h4>Block #2</h4>
      <label for="portal_block[title2]">Title - H2</label>
      <br/>
      <input type="text" name="portal_block[title2]" id="portal_block[title2]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['title2'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>
      <label for="portal_block[icon2]">Icon class from FontAwesome Library - <a href="http://fontawesome.io/cheatsheet/" target="_blank">View cheatsheet</a></label>
      <br/>
      <input type="text" name="portal_block[icon2]" id="portal_block[icon2]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['icon2'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>

      <label for="portal_block[textarea2]">Text Content</label>
      <br/>

        <textarea type="textarea" name="portal_block[textarea2]" id="portal_block[textarea2]" class="textarea-admin" >
        <?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['textarea2'];
        } else{ ?> Edit  <?php }?>
        </textarea>  <br/>
    </div>

    <div class="col-1-3">
        <h4>Block #3</h4>
        <label for="portal_block[title3]">Title - H2</label>
        <br/>
        <input type="text" name="portal_block[title3]" id="portal_block[title3]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
            echo $portal_block['title3'];
        } ?>" placeholder="Edit">
        <br/>
        <br/>
        <label for="portal_block[icon3]">Icon class from FontAwesome Library - <a href="http://fontawesome.io/cheatsheet/" target="_blank">View cheatsheet</a></label>
        <br/>
        <input type="text" name="portal_block[icon3]" id="portal_block[icon3]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
            echo $portal_block['icon3'];
        } ?>" placeholder="Edit">
        <br/>
        <br/>

        <label for="portal_block[textarea3]">Text Content</label>
        <br/>

          <textarea type="textarea" name="portal_block[textarea3]" id="portal_block[textarea3]" class="textarea-admin" >
          <?php if ( ! empty( $portal_block ) ) {
            echo $portal_block['textarea3'];
          } else{ ?> Edit  <?php }?>
          </textarea>
    </div>

    <div class="col-1-3">
      <h4>Block #4</h4>
      <label for="portal_block[title4]">Title - H2</label>
      <br/>
      <input type="text" name="portal_block[title4]" id="portal_block[title4]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['title4'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>
      <label for="portal_block[icon4]">Icon class from FontAwesome Library - <a href="http://fontawesome.io/cheatsheet/" target="_blank">View cheatsheet</a></label>
      <br/>
      <input type="text" name="portal_block[icon4]" id="portal_block[icon4]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['icon4'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>

      <label for="portal_block[textarea4]">Text Content</label>
      <br/>

        <textarea type="textarea" name="portal_block[textarea4]" id="portal_block[textarea4]" class="textarea-admin" >
        <?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['textarea4'];
        } else{ ?> Edit  <?php }?>
        </textarea>
    </div>

    <div class="col-1-3">
      <h4>Block #5</h4>
      <label for="portal_block[title5]">Title - H2</label>
      <br/>
      <input type="text" name="portal_block[title5]" id="portal_block[title5]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['title5'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>
      <label for="portal_block[icon5]">Icon class from FontAwesome Library - <a href="http://fontawesome.io/cheatsheet/" target="_blank">View cheatsheet</a></label>
      <br/>
      <input type="text" name="portal_block[icon5]" id="portal_block[icon5]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['icon5'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>

      <label for="portal_block[textarea5]">Text Content</label>
      <br/>

        <textarea type="textarea" name="portal_block[textarea5]" id="portal_block[textarea5]" class="textarea-admin" >
        <?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['textarea5'];
        } else{ ?> Edit  <?php }?>
        </textarea>
    </div>

        <div class="col-1-3">
      <h4>Block #6</h4>
      <label for="portal_block[title6]">Title - H2</label>
      <br/>
      <input type="text" name="portal_block[title6]" id="portal_block[title6]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['title6'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>
      <label for="portal_block[icon6]">Icon class from FontAwesome Library - <a href="http://fontawesome.io/cheatsheet/" target="_blank">View cheatsheet</a></label>
      <br/>
      <input type="text" name="portal_block[icon6]" id="portal_block[icon6]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['icon6'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>

      <label for="portal_block[textarea6]">Text Content</label>
      <br/>

        <textarea type="textarea" name="portal_block[textarea6]" id="portal_block[textarea6]" class="textarea-admin" >
        <?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['textarea6'];
        } else{ ?> Edit  <?php }?>
        </textarea>
    </div>

        <div class="col-1-3">
      <h4>Block #7</h4>
      <label for="portal_block[title7]">Title - H2</label>
      <br/>
      <input type="text" name="portal_block[title7]" id="portal_block[title7]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['title7'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>
      <label for="portal_block[icon7]">Icon class from FontAwesome Library - <a href="http://fontawesome.io/cheatsheet/" target="_blank">View cheatsheet</a></label>
      <br/>
      <input type="text" name="portal_block[icon7]" id="portal_block[icon7]" class="input-admin" value="<?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['icon7'];
      } ?>" placeholder="Edit">
      <br/>
      <br/>

      <label for="portal_block[textarea7]">Text Content</label>
      <br/>

        <textarea type="textarea" name="portal_block[textarea7]" id="portal_block[textarea7]" class="textarea-admin" >
        <?php if ( ! empty( $portal_block ) ) {
          echo $portal_block['textarea7'];
        } else{ ?> Edit  <?php }?>
        </textarea>
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
