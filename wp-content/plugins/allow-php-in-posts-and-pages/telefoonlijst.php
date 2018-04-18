<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/simple-sidebar.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>

<table class="table" id="dev-table">
	<tr>
        <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Zoeken..." $(input-element).filterTable() autofocus />
    </tr>
<?php

								
	$connect = mysqli_connect(localhost, root, "", wordpress) or die ("Kan geen connectie maken met de database");
												
	    $query = "SELECT * FROM `telefoonlijst`";	
		$result = mysqli_query ($connect, $query); 
		

		

            echo "<thead>";
            echo "<tr>";
			echo "<th>Naam</th>";
			echo "<th>Vestiging</th>";
			echo "<th>Afdeling</th>";
            echo "<th>Telefoon</th>";
            echo "<th>Mobiel</th>";
            echo "<th>Fax</th>";
            echo "<tr>";
            echo "</thead>";
            echo "<tbody>";

			while( $record=mysqli_fetch_array($result) ) {
						
				$naam=$record['naam'];			
				$vestiging=$record['vestiging'];							
				$afdeling=$record['afdeling'];
				$telefoon=$record['telefoon'];
				$mobiel=$record['mobiel'];
				$fax=$record['fax'];

			echo "<tr>";
            echo "<td>".$naam."</td>";
			echo "<td>".$vestiging."</td>";
			echo "<td>".$afdeling."</td>";
			echo "<td>".$telefoon."</td>";
			echo "<td>".$mobiel."</td>";
			echo "<td>".$fax."</td>";			
			echo "</tr>";
			}
			echo "<tr>";	
			echo "</tbody>";
			echo "</table>";	

 ?>


<script type="text/javascript">/**
         * I don't recommend using this plugin on large tables, I just wrote it to make the demo useable. It will work fine for smaller tables
         * but will likely encounter performance issues on larger tables.
         *
         * <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
         * $(input-element).filterTable()
         *
         * The important attributes are 'data-action="filter"' and 'data-filters="#table-selector"'
         */
        (function(){
            'use strict';
            var $ = jQuery;
            $.fn.extend({
                filterTable: function(){
                    return this.each(function(){
                        $(this).on('keyup', function(e){
                            $('.filterTable_no_results').remove();
                            var $this = $(this), search = $this.val().toLowerCase(), target = $this.attr('data-filters'), $target = $(target), $rows = $target.find('tbody tr');
                            if(search == '') {
                                $rows.show();
                            } else {
                                $rows.each(function(){
                                    var $this = $(this);
                                    $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
                                })
                                if($target.find('tbody tr:visible').size() === 0) {
                                    var col_count = $target.find('tr').first().find('td').size();
                                    var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">Geen resultaten gevonden</td></tr>')
                                    $target.find('tbody').append(no_results);
                                }
                            }
                        });
                    });
                }
            });
            $('[data-action="filter"]').filterTable();
        })(jQuery);

        $(function(){
// attach table filter plugin to inputs
            $('[data-action="filter"]').filterTable();

            $('.container').on('click', '.panel-heading span.filter', function(e){
                var $this = $(this),
                    $panel = $this.parents('.panel');

                $panel.find('.panel-body').slideToggle();
                if($this.css('display') != 'none') {
                    $panel.find('.panel-body input').focus();
                }
            });
            $('[data-toggle="tooltip"]').tooltip();
        })
    </script>
</body>
</html>