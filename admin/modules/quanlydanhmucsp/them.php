<style>
  <?php include 'css/styleadmin.css'; ?>
</style>
<h4>Thêm danh mục sản phẩm</h4>
<table class="product_add">
	<form method="POST" action="modules/quanlydanhmucsp/xuly.php">
		<tr>
			<th>Tên danh mục</td>
			<td><input type="text" name="tendanhmuc"></td>
		</tr>
		<tr>
			<th>Thứ tự</td>
			<td><input type="text" name="thutu"></td>
		</tr>
		<tr class="block">
			<td></td>
			<td><input type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
		</tr>
	</form>
</table>