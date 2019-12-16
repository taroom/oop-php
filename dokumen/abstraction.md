## Abstract
adalah sebuah parent class yang dimana parent class yang abstract ini mempunyai setidaknya 1 abstract method yang terdeklarasi (namun tidak terimplementasi), dimana isi task (implementasi) dari method tersebut akan dituliskan di class child

(?) masih belum paham kenapa harus ada abstract padahal pakai class langsung bisa

## Interface




## tabel perbedaan abstract dan interface
<table>
	<tr>
		<th></th>
		<th>Interface</th>
		<th>Abstract</th>
	</tr>
	<tr>
		<td>kode</td>
		<td>
			<ul>
				<li>abstract method</li>
				<li>constant</li>
			</ul>
		</td>
		<td>
			<ul>
				<li>abstract method</li>
				<li>constant</li>
				<li>atribut konkrit (?)</li>
				<li>method konkrit (?)</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>akses modifier</td>
		<td>
			<ul>
				<li>public</li>
			</ul>
		</td>
		<td>
			<ul>
				<li>public</li>
				<li>private</li>
				<li>protected</li>
				<li>dll</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>jumlah parent</td>
		<td>
			<ul>
				<li>1 class bisa memiliki banyak interface</li>
			</ul>
		</td>
		<td>
			<ul>
				<li>1 class hanya bisa mewarisi 1 abstract class</li>
			</ul>
		</td>
	</tr>
</table>

[https://phpenthusiast.com/object-oriented-php-tutorials/interfaces]
[https://www.w3schools.com/php/php_oop_classes_abstract.asp]