## Abstract
adalah sebuah parent class yang dimana parent class yang abstract ini mempunyai setidaknya 1 abstract method yang terdeklarasi (namun tidak terimplementasi), dimana isi task (implementasi) dari method tersebut akan dituliskan di class child

class abstract digunakan untuk semacam pedoman/referensi bagi developer agar men-standarkan atribut dan method apa saja yang harus ada ketika class child mewarisi class parent yang abstract. contoh : database ada banyak seperti mysql, mongo, oracle dsb nah kita mau standarisasi nih atributnya seperti *nama_database, port* dsb lalu methodnya seperti *connect()* untuk koneksi, *query()* untuk melakukan querying database dsb. setelah kita buat kelas abstract **database** maka kita bisa buat child classnya seperti **mysql_database, mongo_database, oracle_database** yang masing masing kelas child tersebut harus meng-implementasi atribut *nama_database, port, connect(), query()* di dalam scope kelasnya

## Interface
adalah sebuah jenis deklarasi kelas yang bersifat seperti class abstract (isi dari interface adalah deklarasi atribut dan method) yang harus ditulis ulang (implement) di kelas yang mengikutkan class interface ini. kita lihat tabel dibawah ini menunjukkan bahwa 1 child class bisa mengikutkan (implement) banyak interface. selain itu secara garis besar interface digunakan untuk membuat suatu organisasi koding agar lebih mudah dipahami


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

[https://phpenthusiast.com/object-oriented-php-tutorials/abstract-classes-and-methods]
[https://phpenthusiast.com/object-oriented-php-tutorials/interfaces]
[https://www.w3schools.com/php/php_oop_classes_abstract.asp]