testProje


#Project description

Bu yazdığım ufak Feature' şu şekilde düşündüm - şu kısıma kadar yaptım:

Ders başladığında öğretmen oturum açıyor varsayıyorum. (socketin ana adresi)

O günkü dersler listeleniyor. (bunlar o günün tarihi ve saatine göre konu konu olarak girildiğini varsaydım)

Ekranda Öğrencilerin Listesi var ve öğretmen aktif konuları işliyor.

Öğrenci dersi takip ederken tabletten o anki konuyu anlık anlamadığını öğretmeninden yardım isteyerek bildiriyor.

Bu bildirim anlık olarak Öğretmenin sayfasında uyarı olarak çıkıyor. Kimin yaptığını göstermek içinde o öğrenci yi temsil eden BOXSET'in opacity sini düşürerek belli ettim. (test ederken /student/1 bakabilirsiniz)

Öğretmene konu ile ilgili anlık mesaj gönderebilir.

Bunların tamamı loglanarak iş sırasına koyularak öğretmenin kendi panelinde gösterilebilir. (Ahmet Yılmaz Matematik dersinde Kesirler konusunda yardım istedi)

Bu sayede öğretmen her bir öğrencinin kendi profil sayfasında gelişimini takip edebilir.Puan verebilir .
İleride tabletlere doküman uygulama vs kurulurken bu datalara göre anlamlı işlemler yapılabilir diye düşündüm. (Ahmet'in anlamadığı Kesirler konusunda bir uygulamayı push etme gibi. )

Benim düşüncem önerim Öğrenciler arasında başarıyı artırmak ve kullanımıda artırmak için uygulamayı daha sosyal hale getirmek. Foursquare deki gibi bir ROZET mantığı ile o gün o hafta o ay en başarılı konularda öğrencilere sistem ROZET verecek . Diğer öğrenci arkadaşları görebilecek.(Belki bu hırs yaptırarak derslere yönelmelerini sağlayabilir :) )

Bir başka konuda Öğretmenler bu fatih projesini ne kadar aktif kullandıklarını tutan bir mekanizma - yaptırım yapılabilir.Günlük kaç saat tabletlercen yada akıllı tahtalardan ders işlenmiş. Bu konu ile ilgili bir öğretmen arkadaşım epey bir dert yandı kullanmıyorlar diye)

#Project Requirements

1 - Backend işlemleri için PHP tercih ettim. Daha hakim olduğum için hemde bu tür webapp rest api servisleri için esnek olduğu için.

Bu örnek kodda SYMFONY 3 frameworkünü tercih ettim. Symfony tercih etme sebebim hem daha stabil hem daha hızlı olması.Diğer frameworklerde güncellemelerde versiyon problemleri ve modül uyuşmazlıkları çıkabiliyor.Symfony bu konudada stabil.


2 - Database olarak Mysql kullandım. Ama çok fazla sorguların olduğu zamanlar NOSQL mongodb tercih ederdim.
Zaman olmadığı için pek relation bir table kurmadim. direk tablo ve datalari yerleştirdim örnek olarak.

3 - Uygulama'da WebSocket kullandım.Ratchet local'de websocket kurarak symfony ile uyumlu çalışıyor. Ama zaman olsa hem database hemde realtime işlemler için firebase tercih ederdim. (fakat böyle bir projede dışarıda data tutmak pek mantıklı olmadığı için bunu yapmamayı tercih ederdim. )

4- Arayüz olarak bootstrap 4 kullandım. Zaman olsa Angular Material ile kurgulardım. bootstrap'e göre daha kuvvetli ve hoş geliyor UI elementleri.

5- Son olarak bu bir webapp oldu. Zaman olsaydı bunu RESTAPI şeklinde tasarlayıp REACT NATİVE yada HYBRID mobil uygulamasına bağlama işlemleri daha hızlı olurdu)
