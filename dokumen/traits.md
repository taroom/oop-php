## Trait

```php
trait Hallo()
{
	public function katakanHallo()
	{
		echo "Hallo";
	}
}

trait Dunia()
{
	public function katakanDunia()
	{
		echo "Dunia";
	}
}

class Katakan {
	use Hallo, Dunia;

	public function katakanSeru()
	{
		echo "!";
	}
}

$output = new Katakan();
$output->katakanHallo();
$output->katakanDunia();
$output->katakanSeru();
```

script diatas adalah contoh bagaimana trait dibuat dan diakses lewat class katakan dengan menggunakan **use** otomatis method-method yang ada ditrait-trait tadi masuk kedalam kelas katakan dan langsung bisa kita gunakan tanpa harus menulis ulang (implement) seperti interface