<?php



?>


<h3>新規登録フォーム</h3>
<form action="./insert" method="post">
    <div class="form-group">
        <label>商品名</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>金額</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="form-group">
        <label>個数</label>
        <input type="text" class="form-control" name="amount">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>




<?php if(count($products)):?>
<table class="table ">
    <tr>
        <th>#</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach($products as $index => $product):?>
        <tr>
            <td><?=$index+1?></td>
            <td><?=$product->name?></td>
            <td><?=$product->price?></td>
            <td><?=$product->amount?></td>
            <td>
                <form action="./delete" method="post">
                    <input name="id" value="<?=$product->id?>" type="hidden"/>
                    <button type="submit" class="btn btn-default btn-xs">削除</button>
                </form>
            </td>
        </tr>
    <?php endforeach;?>
</table>

<?php else:?>

    <br/>
    <div class="well">
        データが存在しません。
    </div>

<?php endif;?>