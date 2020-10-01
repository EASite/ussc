<?php

namespace Database\Seeders;
use App\Models\Item;

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $items = [
            ['title' => 'Мастер и Маргарита', 'author' => 'Михаил Булгаков', 'description' => 'Один из самых загадочных и удивительных романов XX века. Роман "Мастер и Маргарита" - визитная карточка Михаила Афанасьевича Булгакова.', 'price' => '500'],
            ['title' => 'Преступление и наказание', 'author' => 'Фёдор Достоевский', 'description' => 'Роман "Преступление и наказание" - детектив со всеми необходимыми атрибутами: "хождение по мукам" нищего студента Родиона Раскольникова, убийство старухи-процентщицы, последовавшее за ним расследование, наказание и, конечно же, любовь...', 'price' => '550'],
            ['title' => 'Анна Каренина', 'author' => 'Лев Толстой', 'description' => 'Гениальный роман Льва Толстого, который не оставляет равнодушным никого, кто его прочел.', 'price' => '475'],
            ['title' => 'Двенадцать стульев', 'author' => 'Евгений Петров и др.', 'description' => 'Знаменитый роман-фельетон И.Ильфа и Е.Петрова «Двенадцать стульев» впервые был опубликован в 1928 году, а сегодня его называют в числе культовых произведений отечественной литературы XX века.', 'price' => '390'],
            ['title' => 'Евгений Онегин', 'author' => 'Александр Пушкин', 'description' => '«Евгений Онегин» — роман в стихах Александра Сергеевича Пушкина, написанный в 1823—1831 годах, одно из самых значительных произведений русской словесности.', 'price' => '610'],
            ['title' => 'Граф Монте-Кристо', 'author' => 'Александр Дюма', 'description' => '"Граф Монте-Кристо"- книга, которую вот уже полтора столетия с увлечением читают и взрослые, и дети.', 'price' => '450'],
            ['title' => 'Идиот', 'author' => 'Фёдор Достоевский', 'description' => 'Роман «Идиот» занимает в творчестве Достоевского особое место.', 'price' => '520'],
            ['title' => 'Зелёная миля', 'author' => 'Стивен Кинг', 'description' => 'Стивен Кинг приглашает читателей в жуткий мир тюремного блока смертников, откуда уходят, чтобы не вернуться, приоткрывает дверь последнего пристанища тех, кто преступил не только человеческий, но и Божий закон.', 'price' => '280'],
            ['title' => 'Братья Карамазовы', 'author' => 'Фёдор Достоевский', 'description' => '"Братья Карамазовы" - последнее большое произведение великого русского писателя Ф.М.Достоевского, в котором обнажены "все глубины души человеческой" и "дьявол с Богом борется, а поле битвы - сердца людей".', 'price' => '410'],
            ['title' => 'Герой нашего времени', 'author' => 'Михаил Лермонтов', 'description' => '«Героой наашего времени» (написан в 1838—1840) — знаменитый роман Михаила Юрьевича Лермонтова, классика русской литературы.', 'price' => '540'],
            ['title' => 'Война и мир', 'author' => 'Лев Толстой', 'description' => '"Война и мир" - самый знаменитый роман русской литературы.', 'price' => '980'],
            ['title' => 'Собачье сердце', 'author' => 'Михаил Булгаков', 'description' => '«Собачье сердце» – одно из самых любимых читателями произведений Михаила Булгакова.', 'price' => '150'],
            ['title' => 'Мёртвые души', 'author' => 'Николай Васильевич Гоголь', 'description' => '«Мёртвые души» — произведение писателя Николая Васильевича Гоголя, жанр которого сам автор обозначил как поэма.', 'price' => '265'],
            ['title' => 'Золотой телёнок', 'author' => 'Евгений Петров и др.', 'description' => 'Бешеный успех, который обрушился на Илью Ильфа и Евгения Петрова после публикации "Двенадцати стульев" (1928), побудил соавторов "воскресить"своего героя, неунывающего и обаятельного афериста Остапа Бендера, и взяться за создание романа "Золотой теленок" (1931).', 'price' => '360'],
            ['title' => 'Старик и море', 'author' => 'Эрнест Хемингуэй', 'description' => 'Повесть «Старик и море» написана Э.Хемингуэем в 1952 году.', 'price' => '750'],
            ['title' => 'Бесы', 'author' => 'Фёдор Достоевский', 'description' => 'БЕСЫ - безусловно, роман-предостережение и роман-проро­чество, в котором великий писатель и мыслитель указывает на грядущие социальные катастрофы.', 'price' => '250'],
            ['title' => 'Волшебник Изумрудного города', 'author' => 'Александр Волков', 'description' => 'Сказочная повесть Александра Мелентьевича Волкова', 'price' => '130'],
            ['title' => 'Горе от ума', 'author' => 'А. С. Грибоедов', 'description' => '«Горе от ума» — комедия в стихах А. С. Грибоедова — произведение, сделавшее своего создателя классиком русской литературы.', 'price' => '725'],
            ['title' => 'Крестный отец', 'author' => 'Марио Пьюзо', 'description' => '«Крестный отец» – классический роман о жизни одного из могущественных преступных синдикатов Америки – мафиозного клана дона Корлеоне.', 'price' => '420'],
            ['title' => 'Код да Винчи', 'author' => 'Дэн Браун', 'description' => 'Секретный код скрыт в работах Леонардо да Винчи…', 'price' => '330'],
            ['title' => 'Приключения Шерлока Холмса', 'author' => 'Артур Конан Дойл', 'description' => 'Детектив', 'price' => '100'],
            ['title' => 'Собака Баскервилей', 'author' => 'Артур Конан Дойл', 'description' => 'В роду Баскервилей из поколения в поколение передается семейная легенда о мистической собаке, которая преследует всех Баскервилей в этих местах по ночам. Впервые призрак появился в XVII веке и с тех пор периодически напоминает о себе загадочными смертями представителей рода Баскервилей.', 'price' => '1200'],
            ['title' => 'Стив Джобс', 'author' => 'Уолтер Айзексон', 'description' => 'Биография', 'price' => '770'],
        ];

        foreach($items as $item) {
            Item::create([
                'title' => $item['title'],
                'author' => $item['author'],
                'description' => $item['description'],
                'price' => $item['price'],
            ]);
        }
    }
}