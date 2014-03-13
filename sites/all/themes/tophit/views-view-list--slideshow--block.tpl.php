<div class="flexslider-wrapper">

    <div class="flexslider">
        <ul class="slides">
        <?php foreach ($rows as $id => $row) { ?>
          <li>
        
        <!-- Overriding $row result -->
        <?php $view = views_get_current_view();
        $nid = $view->result[$id]->nid; 
        $node = node_load($nid);
        $lang = 'und';
        
        if ($node->type=='mt_slideshow_entry') {
        
            if ($node->field_teaser_image) {
            
                $image = image_style_url('slideshow', $node->field_teaser_image[$lang][0]['uri']); 
                $title = $node->field_teaser_image[$lang][0]['title'];
                $alt = $node->field_teaser_image[$lang][0]['alt']; ?>
            
                <?php if ($node->field_slideshow_entry_path) {
                 
                $path = $node->field_slideshow_entry_path[$lang][0]['value']; ?>
                <div class="views-field views-field-field-teaser-image">
                    <div class="field-content">
                    <a href="<?php print url($path); ?>"><img  src="<?php print $image; ?>" title="<?php print $title; ?>" alt="<?php print $alt; ?>"/></a>
                    </div>
                </div>
                <?php } else { ?>
                <div class="views-field views-field-field-teaser-image">
                    <div class="field-content">
                    <img  src="<?php print $image; ?>" title="<?php print $title; ?>" alt="<?php print $alt; ?>"/>
                    </div>
                </div>
                <?php } ?>
            
            <?php } ?> 
            
            <?php //Flexslider caption
            if ($node->field_teaser): ?>
            <?php $teaser = $view->style_plugin->rendered_fields[$id]['field_teaser'];
            print $teaser; ?>
            <?php endif; ?>
        
        <?php } else { print $row; } ?> 
        <!-- EOF: Overriding $row result -->  
        
        </li>
        <?php } ?>
        </ul>
    </div>
  
</div>