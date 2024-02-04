<?php
use Roots\Sage\Assets;
/**
* This is the description for the Utilities class.
*
* @package    Utilities
* @author     Code95 (Superheroes Team)
* @version    1.0.0
* @since      1.0.0 First time this was introduced.
* @copyright  All right reseved Code95 - 2017
* @link       http://ecode95.com.
*/
class Utilities{
  /**
  * Function Name: Framework Path - Utilities::resources_path();
  * This Function can return the framework folder path to uesd it in our Code
  * @param ($filename) Add param in function have a file path in the framework root
  * @return ( All Path )
  */
  static function resources_path($filename) {
    $dist_path = get_template_directory_uri();
    $directory = dirname($filename) . '/';
    $file = basename($filename);

    return $dist_path . $directory . $file;
  }
  /**
  * Function Name: Global Thumbnails - Utilities::global_thumbnails();
  * This Function can return the url of any upload image
  * @param ($id, $size, true)
  * @return ( Just URl)
  */
  static function global_thumbnails($id, $size, $echo = true) {
        if(has_post_thumbnail($id)) :
                $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($id), $size);
                $default_image = get_field('default_image', 'option');
            if ($thumbnail):
                $output = $thumbnail[0];
            elseif ($default_image):
                $output = $default_image;
            else:
                $output = Utilities::resources_path('/resources/images/placeholder.jpg');
            endif;
            if ($echo) {
                echo $output;
            } else {
                return $output;
            }
        endif;
    }
    /**
    * Function Name: C95 Shortcode - Utilities::c95_shortcode();
    * This Function can return the All of shortcodes in website
    * @param ()
    * @return (All in ShortCode array)
    */
    static function c95_shortcode() {
      $shortcodes = array(
        'C95 ShortCode' => 'c95_shortcode',
      );
      foreach ($shortcodes as $key => $shortcode):
        echo '<option value="'. $shortcode .'">'. $key .'</option>' ;
      endforeach;
    }


    /**
    * Function Name: is subcategory - Utilities::is_subcategory();
    * This Function can Check for the subcategory page and redurict to it
    * @param ()
    * @return (All in ShortCode array)
    */
    static function is_subcategory( $cat_id = NULL ) {
      if (!$cat_id )
      $cat_id = get_query_var( 'cat' );
      if ( $cat_id ) {
        $cat = get_category( $cat_id );
        if ( $cat->category_parent > 0 )
        return true;
      }
      return false;
    }


    /**
    * Function Name: language selector flags - Utilities::language_selector_flags();
    * This Function can Check for the language selector flags
    * @param ()
    * @return (All in ShortCode array)
    */
    static  function language_selector_flags(){
      if(function_exists('icl_get_languages')){
        $languages = icl_get_languages('skip_missing=0&orderby=code');
        if(!empty($languages)){
        ?>
            <div class="languages-wrapper mx-2 my-2 my-md-0">
                <ul class="navbar-nav">
                <li class="nav-item lang-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle='dropdown' aria-haspopup="true" aria-expanded="false">
                    <?php
                        foreach($languages as $l){
                        ?>
                        <?php if($l['active'] == 1) { echo $l['language_code']; } ?>
                        <?php
                        }
                    ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php
                        foreach($languages as $l){
                            if($l['active'] != 1) {
                    ?>
                        <a class="dropdown-item" href="<?= $l['url'] ?> ">
                            <?= $l['language_code']; ?>
                        </a>
                    <?php
                            }
                        }
                    ?>
                    </div>
                </li>
                </ul>
            </div>
            <?php
        }
      }
    }


   /**
    * Estimated reading time in minutes
    *
    * @param $content
    *
    * @return int estimated time in minutes
    */

    //estimated reading time
    static function reading_time($the_content) {

      if (!function_exists('mb_str_word_count')) {
          function mb_str_word_count($string, $format = 0, $charlist = '[]') {
              $string=trim($string);
              if(empty($string))
                  $words = array();
              else
                  $words = preg_split('~[^\p{L}\p{N}\']+~u',$string);
              switch ($format) {
                  case 0:
                      return count($words);
                      break;
                  case 1:
                  case 2:
                      return $words;
                      break;
                  default:
                      return $words;
                      break;
              }
          }
      }
      $word_count = str_word_count( strip_tags( $the_content ) );
        $readingtime = ceil($word_count / 200);

      // if(ICL_LANGUAGE_CODE == 'ar') {
      //     $word_count = mb_str_word_count($the_content) . PHP_EOL;
      //     $readingtime = ceil($word_count / 200);
      // } else {
      //     $word_count = str_word_count( strip_tags( $the_content ) );
      //     $readingtime = ceil($word_count / 200);
      // }


      return $readingtime;
  }
    /* End of the Utilities class. */
  }

