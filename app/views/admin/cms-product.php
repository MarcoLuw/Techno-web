<div class="row my-5">
    <h3 class="fs-4 mb-3">All Products</h3>
    <div class="button-outline d-flex justify-content-between">
        <a class="btn btn-outline-primary" href="admin/cmsProduct/cmsCreateProduct" style="width: 200px;">Create product</a>
        <div class="section">
            <span><button class="btn btn-outline-secondary navigation"><</button></span>
                <?php
                    for($i = 0; $i < floor($data["num"]); $i++) {
                        echo '<button class="btn btn-outline-secondary page" style="margin: 1px;">'.($i + 1).'</button>';
                        // if($i > 4) break;
                    }
                    ?>
            <span><button class="btn btn-outline-secondary navigation">></button></span>
        </div>
        <div></div>
    </div>
    <div class="col">
        <table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $numpage = $data['numpage'];
                    $num = substr($data['section'], strpos($data['section'], "?section=") + 9, strlen($data['section']));
                    if(!is_numeric($num)) $num = floor($data['num']) == $data['num'] ? $data['num'] : $data['num'] - 1;
                    for($i = $num*$numpage; $i < $numpage + $num*$numpage; $i++) {
                        if($i < count($data['output']))
                            echo $data["output"][$i];
                        else break;
                    }
                    // echo $data['output'];
                ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    var buttons = document.getElementsByClassName('page');
    var button;
    for(button in buttons) {
        if(typeof(buttons[button]) != "number") buttons[button].addEventListener('click', getNum);
        else break;
    }
    function getNum(e) {
        var num = e.target.innerHTML;
        window.location.href = `admin/cmsProduct/?section=${num - 1}`;
    }
</script>