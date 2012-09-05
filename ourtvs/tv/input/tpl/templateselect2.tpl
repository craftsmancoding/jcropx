
<!-- <select name="tv{$tv->id}" id="tv{$tv->id}" class="combo"></select>

<script type="text/javascript">
	
	//<![CDATA]
	{literal}
		MODx.load({
		{/literal}
			xtype: 'modx-combo-template'
		    ,name: 'tv{$tv->id}'
		    ,hiddenName: 'tv{$tv->id}'
		    ,transform: 'tv{$tv->id}'
		    ,id: 'tv{$tv->id}'
		    ,width: 300
		    ,value: '{$tv->value}'
		{literal}
			,listeners: {'select': { fn:MODx.fireResourceFormChange, scope:this }}
		});
	{/literal}
	//]]>	

</script> -->

<style type="text/css">
	
.test-tv {
	border: 1px solid red;
}
</style>

<input type="text" name="tv{$tv->id}" id="tv{$tv->id}" class="test-tv">