<?php foreach(Cart::content() as $row) :?>
    <tr>
        <td>
            <p><strong><a href="{{ url('items/'.$row->id) }}"><?php echo $row->name; ?></a></strong></p>
            <p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
        </td>
        <td>$<?php echo $row->price; ?></td>
        <td>$<?php echo $row->total; ?></td>
        <td><?php echo $row->id; ?></td>
        <td>
            <form action="{{url('/items/remove') }}" method="post">
              <div class="form-group">
                {{ csrf_field() }}
                <input type="hidden" value="{{$row->rowId}}" name="removeItem">
                <input type="submit" value="削除">
              </div>
            </form>
        </td>
    </tr>
<?php endforeach;?>


合計個数：{{ Cart::content()->count() }}
