# [16,21,11,8,12,22] -> Merge Sort
## Yukarıdaki dizinin sort türüne göre aşamalarını yazınız.

1. 
````
[16,21,11] , [8,12,22]
````
2. 
````
[16,21,11] -> [16], [21,11]
[8,12,22] -> [8], [12,22]
````

3. 
```
[16] -> [16]
[21,11] -> [11,21]
[8] -> [8]
[12,22] -> [12,22]
```

4. 
```
[11,21] birleştirilir -> [11, 21]
[8,12,22] birleştirilir -> [8, 12, 22]
```
5. 
```
[16], [11,21], [8], [12,22] birleştirilir -> [11,16,21], [8,12,22]
```
6. 
```
[11,16,21], [8,12,22] birleştirilir -> [8, 11, 12, 16, 21, 22]
```

Sonuç
```
[8, 11, 12, 16, 21, 22] dizesi oluşur.
```


## Big-O gösterimini yazınız.
Merge Sort algoritmasının en kötü durum zaman karmaşıklığı O(nlog(n))'dir. 
Bu nedenle, [16,21,11,8,12,22] dizisi Merge Sort ile sıralandığında da zaman karmaşıklığı O(nlog(n)) olacaktır.





