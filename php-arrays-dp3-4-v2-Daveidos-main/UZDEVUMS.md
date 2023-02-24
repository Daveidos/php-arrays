## Izveidojiet preču kategoriju datu struktūru, izmantojot PHP asociatīvo masīvu.

### 1. Datu struktūra saraksta veidā:

$productCategory
- Datortehnika
  - Portatīvie datori
  - Peles
    - Vadu
    - Bezvadu
  - Printeri
    - Lazeru
    - Tintes
  - Monitori
    - Biroja
    - Gaming
      - Asus
      - Lenovo
- Mēbeles
  - Divāni
  - Krēsli
  - Galdi
    - Virtuves
    - Istabas


### 2. Izveidojiet ziņu lietotājam izmantojot datus no izveidota masīva:

##### Piemēram:

```echo 'Man ir ' . $productCategory['computers']['notebooks'][1] . ', un es lietoju ' . $productCategory['headphones']['in-ear'][1]```.
