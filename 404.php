<?php get_header();
$options = get_option('my_framework');
?>
<div class="container">
    <div class="row">
        <div class="t404">
            <sapn class="text">404</sapn>
            <sapn class="des">برگه پیدا نشد!</sapn>
        </div>
    </div>
</div>
    <style>
        .t404{
            text-align: center;
            display: grid;
            margin: 50px 0;
        }
        .text{
            font-size: 200px;
            font-weight: 900;
            color: #c9c9c9;
            text-shadow: -2px -2px 0 <?php if ($options['color-seg'] == 'option-1') {echo '#de0400';}elseif ($options['color-seg'] == 'option-2'){echo '#3fc899';}elseif ($options['color-seg'] == 'option-3'){echo '#0a53be';}else{echo $options['opt-color-1'];}
?>, 2px -2px 0 <?php if ($options['color-seg'] == 'option-1') {echo '#de0400';}elseif ($options['color-seg'] == 'option-2'){echo '#3fc899';}elseif ($options['color-seg'] == 'option-3'){echo '#0a53be';}else{echo $options['opt-color-1'];}
?> , -2px 2px 0 <?php if ($options['color-seg'] == 'option-1') {echo '#de0400';}elseif ($options['color-seg'] == 'option-2'){echo '#3fc899';}elseif ($options['color-seg'] == 'option-3'){echo '#0a53be';}else{echo $options['opt-color-1'];}
?> , 2px 2px 0 <?php if ($options['color-seg'] == 'option-1') {echo '#de0400';}elseif ($options['color-seg'] == 'option-2'){echo '#3fc899';}elseif ($options['color-seg'] == 'option-3'){echo '#0a53be';}else{echo $options['opt-color-1'];}
?>;
        }
        .des{
            font-size: 25px;
            font-weight: 500;
            color: #c9c9c9;

        }
    </style>
<?php get_footer(); ?>