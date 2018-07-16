<div class="container-fluid">
    <div class="table-responsive">
        <table id="table_items_list" class="table table-striped table-bordered" width="100%">
            <thead>
                <tr>
                    <th width="50%">Item ID</th>
                    <th width="50%">Item Name</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<script>
    $(document).ready(function(){
        
        $('#table_items_list').DataTable({
            "ajax" : {
                url: '<?php echo site_url('Items_Controller/fetch_items')?>',
                type: 'GET'
            },

            drawCallback: function(){
                $('[data-toggle="tooltip"]').tooltip(); 
            }
        });
    });
</script>