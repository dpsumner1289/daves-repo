<?php 
global $flex_content;
$heading = $flex_content['heading'];
?>
<section class="client-list">
    <div class="container container-main flex col afc jfc">
        <?php if(!empty($heading)): ?>
            <h2 class="client-list__heading"><?php echo $heading; ?></h2>
        <?php endif; ?>
        <div class="flex row afc jfsb">
            <?php 
            $client_list = array(
                array(
                    'name' => 'Funko',
                    'url' => 'https://buildtmighty.com',
                    'logo' => 'clients/funko.svg',
                ),
                array(
                    'name' => 'Redfin',
                    'url' => 'https://buildtmighty.com',
                    'logo' => 'clients/redfin.svg',
                ),
                array(
                    'name' => 'Seattle Seahawks',
                    'url' => 'https://buildtmighty.com',
                    'logo' => 'clients/seahawks.svg',
                ),
                array(
                    'name' => 'Mod',
                    'url' => 'https://buildtmighty.com',
                    'logo' => 'clients/mod.svg',
                ),
                array(
                    'name' => 'TalkingRain',
                    'url' => 'https://buildtmighty.com',
                    'logo' => 'clients/talkingrain.svg',
                ),
                array(
                    'name' => 'Cupcake Royale',
                    'url' => 'https://buildtmighty.com',
                    'logo' => 'clients/cupcakeroyale.svg',
                ),
                array(
                    'name' => 'Speedtree',
                    'url' => 'https://buildtmighty.com',
                    'logo' => 'clients/speedtree.svg',
                ),
                array(
                    'name' => 'Seymour Duncan',
                    'url' => 'https://buildtmighty.com',
                    'logo' => 'clients/seymourduncan.svg',
                ),
                array(
                    'name' => 'Discogs',
                    'url' => 'https://buildtmighty.com',
                    'logo' => 'clients/discogs.svg',
                ),
                array(
                    'name' => 'Dan Carlin',
                    'url' => 'https://buildtmighty.com',
                    'logo' => 'clients/dancarlin.svg',
                ),
                array(
                    'name' => 'Fluidigm',
                    'url' => 'https://buildtmighty.com',
                    'logo' => 'clients/fluidigm.svg',
                ),
                array(
                    'name' => 'Grundéns',
                    'url' => 'https://buildtmighty.com',
                    'logo' => 'clients/grundens.svg',
                ),
            );
            foreach($client_list as $client): ?>
                <a href="<?php echo $client['url']; ?>" class="client-list__client item_1_6 flex row afc jfc">
                    <?php render_svg($client['logo'], _wp_to_kebab_case($client['name'])); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>