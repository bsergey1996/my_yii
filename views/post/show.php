<h1>action Show </h1>



<?
foreach ($cats as $cat){
    if(isset($cat->title)) {
        echo $cat->alias . " ";
        echo $cat->title . "<br/>";
    }
    if(isset($cat['title'])){
        echo $cat['alias']." ";
        echo $cat['title']."<br/>";
    }
}

debug($cats);
?>
















<button class="btn btn-success" id="btn">Click me...</button>
<?
//$this->registerJsFile('@web/js/scripts.js',['depends'=> 'yii\web\YiiAsset']);
//$this->registerJs('$(\'.container\').append(\'<p>SHOW!!!</p>\');', \yii\web\View::POS_LOAD);
$js = <<<JS
    $('#btn').on('click', function(){
        $.ajax({
            url:'index.php?r=post/index',
            data:{test:'123',rtt:'r2'},
            type:'POST',
            success:function(res) {
              console.log(res);
            },
            error: function() {
                alert('Error!');
            } 
        });
    });
JS;
$this->registerJs($js);
?>