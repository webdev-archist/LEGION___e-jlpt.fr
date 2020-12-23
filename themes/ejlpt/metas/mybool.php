<?php 


class BooleanTest {


    const META_KEY = 'booleanmeta';
    
    public static function register(){
        add_action("add_meta_boxes", [self::class,'add'], 'default', 2);
        add_action("save_post", [self::class,'save']);

    }
    public static function add($type, $elt){
        if($type=='post')
            add_meta_box("meta_".self::META_KEY,"Le Titre", [self::class, 'render'], "post", "side", "default", $elt->ID);
    }
    public static function render($elt){
        $meta = get_post_meta($elt->ID, self::META_KEY);
        ?>
        <hr>
        <p><?=var_dump($meta)?></p>
        <p><?=var_dump($elt->ID)?></p>
        <input name="<?=self::META_KEY?>"/>
        <input type="submit">
        <hr>
        <?php 
    }
    public static function save($eltID){
        // var_dump($_POST);
        update_post_meta($eltID, self::META_KEY, $_POST[self::META_KEY]);
    }
}



