<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Cien años de soledad',
                'author' => 'Gabriel García Márquez',
                'image' => 'covers/cien-soledad.jpg',
                'description' => '«Muchos años después, frente al pelotón de fusilamiento, el coronel Aureliano Buendía había
                de recordar aquella tarde remota en que su padre lo llevó a conocer el hielo. Macondo era entonces una aldea
                de veinte casas de barro y cañabrava construidas a la orilla de un río de aguas diáfanas que se precipitaban
                por un lecho de piedras pulidas, blancas y enormes como huevos prehistóricos. El mundo era tan reciente, que
                muchas cosas carecían de nombre, y para mencionarlas había que señalarlas con el dedo».
                Con estas palabras empieza la novela ya legendaria en los anales de la literatura universal, una de las aventuras literarias más fascinantes de nuestro siglo. Millones de ejemplares de Cien años de soledad leídos en todas las lenguas y el Premio Nobel de Literatura coronando una obra que se había abierto paso «boca a boca» -como gusta decir al escritor- son la más palpable demostración de que la aventura fabulosa de la familia Buendía-Iguarán, con sus milagros, fantasías, obsesiones, tragedias, incestos, adulterios, rebeldías, descubrimientos y condenas, representaba al mismo tiempo el mito y la historia, la tragedia y el amor del mundo entero.',
            ],
            [
                'title' => 'Don Quijote de la Mancha',
                'author' => 'Miguel de Cervantes',
                'image' => 'covers/quijote.jpg',
                'description' => 'La traducción íntegra del Quijote al castellano actual, de la mano de Andrés Trapiello, escritor y reconocido experto en Cervantes.
                “En un lugar de la Mancha, de cuyo nombre no quiero acordarme, vivía no hace mucho un hidalgo de los de lanza en ristre, escudo antiguo, rocín flaco y galgo corredor.”
                Con estas palabras, Andrés Trapiello presenta el que es, sin lugar a dudas, uno de los más ambiciosos proyectos literarios de los últimos tiempos: la primera traducción impresa en castellano actual del Quijote.
                El Quijote, la novela acaso más original e influyente de la literatura, es también una de las menos leídas por los lectores españoles e hispanohablantes, a menudo buenos y cultivados lectores, abrumados o desalentados por la dificultad de un castellano, el del siglo XVII, más alejado ya del nuestro de lo que se cree. Sólo pensando en ellos y en hacer que el Quijote vuelva a ser esa novela “clara” en la que no haya “nada que resulte difícil”, para que, como decía el bachiller Sansón Carrasco, los niños la manoseen, los mozos la lean, los hombres la entiendan y los viejos la celebren, Trapiello se ha decidido a adaptarla íntegra y fielmente, sin alejarse nunca del maravilloso lenguaje cervantino.
                Como dice Mario Vargas Llosa en el prólogo a esta singular edición, “la suya ha sido una obra de tesón y de amor inspirada en su conocida devoción por el gran clásico de nuestra lengua”.',
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'image' => 'covers/1984.jpg',
                'description' => '"Mil novecientos ochenta y cuatro" (1949) es un título capital de la literatura distópica
                y uno de los referentes centrales de las corrientes estéticas, culturales y de pensamiento de nuestro tiempo.
                La novela de George Orwell reproduce, en clave de sátira, un probable escenario global en guerra permanente,
                donde los grandes sistemas totalitarios manipulan la historia y la educación de la humanidad para controlar
                las vidas, los pensamientos y hasta los sueños de sus ciudadanos. Su protagonista es Winston Smith, un
                funcionario del Ministerio de la Verdad que se dedica a reescribir el pasado, siguiendo las consignas del
                Partido, mientras crece interiormente su deseo de libertad y su rebeldía contra la asfixia social y la
                obediencia ciega imperantes. La obra maestra de Orwell, además, hace del lenguaje uno de sus temas centrales
                y ha insertado en el imaginario contemporáneo palabras y expresiones tan habituales como "doblepensar" o
                "gran hermano".',
            ],
            [
                'title' => 'El Principito',
                'author' => 'Antoine de Saint-Exupéry',
                'image' => 'covers/principito.jpg',
                'description' => 'El Principito vive en un planeta diminuto, con tres volcanes, una rosa única y muchos
                atardeceres. Un día parte de viaje y descubre que los adultos están ocupados en cosas extrañas y han olvidado
                lo importante.
                Hasta que, en medio del desierto, alguien lo escucha. Un piloto perdido dibuja un cordero… y así comienza una
                amistad que lo cambiará todo.',
            ],
            [
                'title' => 'Rayuela',
                'author' => 'Julio Cortázar',
                'image' => 'covers/rayuela.jpg',
                'description' => 'La publicación de Rayuela en 1963 supuso una verdadera revolución en la narrativa en lengua
                castellana: por primera vez, un escritor llevaba hasta las últimas consecuencias la voluntad de transgredir
                el orden tradicional de una historia y el lenguaje para contarla. Rebosante de ambición literaria y vital,
                renovadora de las herramientas narrativas, destructora de géneros y convenciones, Rayuela es Cortázar en
                esencia, con toda su complejidad ética y estética, con su imaginación y su humor.
                La edición recupera, como complemento a la novela, tres textos magistrales de Gabriel García Márquez,
                Adolfo Bioy Casares y Carlos Fuentes, autores contemporáneos de Julio Cortázar, que dan cuenta de la dimensión
                del autor y de la recepción que tuvo la novela en su tiempo. Además, incluye trabajos de los escritores Mario
                Vargas Llosa y Sergio Ramírez, y de los críticos Julio Ortega, Andrés Amorós, Eduardo Romano y Graciela Montaldo,
                que muestran la intemporalidad de la propuesta narrativa cortazariana.
                Incluye, además, por primera vez desde 1983, la reproducción facsimilar del «Cuaderno de bitácora», la
                libreta en la que Cortázar fue anotando ideas, escenas y personajes de la novela durante el proceso de
                escritura. Este cuaderno permite, como un juego de los que tanto gustó Cortázar, un diálogo del autor con el
                lector sobre la novela que traspasa las fronteras del tiempo. De la lectura de esta novela el lector emerge
                tal vez con otra idea acerca del modo de leer los libros y de ver la vida. Es, sin duda, un mosaico donde
                toda una época se vio maravillosamente reflejada.',
            ],
            [
                'title' => 'La sombra del viento',
                'author' => 'Carlos Ruiz Zafón',
                'image' => 'covers/sombra-viento.jpg',
                'description' => 'Un amanecer de 1945, un muchacho es conducido por su padre a un misterioso lugar oculto en
                el corazón de la ciudad vieja: el Cementerio de los Libros Olvidados. Allí, Daniel Sempere encuentra un libro
                maldito que cambia el rumbo de su vida y le arrastra a un laberinto de intrigas y secretos enterrados en el
                alma oscura de la ciudad. La Sombra del Viento es un misterio literario ambientado en la Barcelona de la
                primera mitad del siglo xx, desde los últimos esplendores del Modernismo hasta las tinieblas de la posguerra.
                Aunando las técnicas del relato de intriga y suspense, la novela histórica y la comedia de costumbres, La
                Sombra del Viento es sobre todo una trágica historia de amor cuyo eco se proyecta a través del tiempo.
                Con gran fuerza narrativa, el autor entrelaza tramas y enigmas a modo de muñecas rusas en un inolvidable
                relato sobre los secretos del corazón y el embrujo de los libros cuya intriga se mantiene hasta la última
                página.',
            ],
            [
                'title' => 'Fahrenheit 451',
                'author' => 'Ray Bradbury',
                'image' => 'covers/fahrenheit.jpg',
                'description' => 'Fahrenheit 451. La temperatura a la que el papel se enciende y arde. Como 1984 de George
                Orwell, como Un mundo feliz de Aldous Huxley, Fahrenheit 451 describe una civilización occidental esclavizada
                por los media, los tranquilizantes y el conformismo.
                La visión de Bradbury es asombrosamente profética: las pantallas de televisión ocupan paredes y exhiben
                folletines interactivos, unos auriculares transmiten a todas horas una insípida corriente de música y
                noticias, en las avenidas los coches corren a 150 kilómetros por hora persiguiendo a peatones; y el cuerpo de
                bomberos, auxiliados por el Sabueso Mecánico, rastrea y elimina a los disidentes que conservan y leen libros.',
            ],
            [
                'title' => 'Matar a un ruiseñor',
                'author' => 'Harper Lee',
                'image' => 'covers/matar-ruisenor.jpg',
                'description' => '«Un icono de la literatura moderna» de Harper Bazaar. En el pequeño pueblo de Maycomb,
                Alabama, durante los años treinta, un hombre negro es acusado de violar a una mujer blanca. Atticus Finch,
                abogado íntegro y viudo a cargo de sus dos hijos, Jem y Scout, decide ponerse al frente de una defensa
                imposible. Desde la mirada impregnada de humor y de ternura de la pequeña Scout, Harper Lee explora las grietas
                de una sociedad dominada por el prejuicio racial, la desconfianza hacia lo diferente, la rigidez de los vínculos
                familiares y vecinales y un sistema judicial sin garantías de imparcialidad.
                Ganadora del Premio Pulitzer, Matar a un ruiseñor es una de las novelas de iniciación más icónicas y
                universales de la literatura contemporánea, la historia de dos hermanos que aprenden a ver el mundo con
                otros ojos y de un padre que se convirtió en un modelo para generaciones de lectores. Una obra que se te pega
                al corazón y te sacude la conciencia con la que Harper Lee fue catapultada a la fama instantánea y que mantiene
                aún hoy su rabiosa actualidad.',
            ],
            [
                'title' => 'Orgullo y prejuicio',
                'author' => 'Jane Austen',
                'image' => 'covers/orgullo-prejucio.jpg',
                'description' => 'La novela más conocida y apreciada Jane Austen, con una nueva traducción y en una edición de
                lujo. Los Bennet pueden permitirse vivir holgadamente porque el padre, un hombre culto e irónico, es
                usufructuario de su casa y sus fincas. Sin embargo, la señora Bennet sufre por el futuro que les espera a
                sus hijas cuando su marido falte ísi no es que por aquel entonces las cinco ya están casadasí, pues en ese
                momento la casa irá a parar a manos de su pariente varón más próximo, el señor Collins. Su suerte cambia de
                pronto cuando se enteran de que Netherfield, una gran propiedad vecina, ha sido comprada por los Bingley,
                una familia adinerada. Al cabo de unos días, el agradable y simpático Charles Bingley se presenta a los Bennet
                acompañado de su hermana, la estirada Caroline Bingley, y de su buen amigo Fitzwilliam Darcy, incluso más rico
                que Bingley... pero mucho más reservado y altivo. Durante los meses siguientes habrá visitas de cortesía,
                cenas e incluso un gran baile que tendrá lugar en Netherfield, en el que las cinco hijas de los Bennet tendrán
                ocasión de lucirse.',
            ],
            [
                'title' => 'El gran Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'image' => 'covers/gatsby.jpg',
                'description' => 'Esta es la historia de Jay Gatsby, un millonario hecho a sí mismo, y de su incansable
                búsqueda por reconquistar a Daisy Buchanan, una mujer adinerada con la que tuvo una relación en su juventud.
                Ambientada en Long Island en la Edad del Jazz, en los felices años veinte, está narrada por Nick Carraway,
                un joven escritor que nos relata las fiestas lujosas que Gatsby organiza con la esperanza de atraer a Daisy,
                casada con Tom Buchanan, un hombre arrogante y superficial. La novela explora asuntos como la riqueza,
                la decadencia moral, el amor, el sueño americano o la búsqueda de la felicidad en una época de excesos y
                corrupción. La obra maestra de uno de los más insignes representantes de la Generación Perdida ilustrada por
                Benjamin Lacombe.',
            ],
            [
                'title' => 'La metamorfosis',
                'author' => 'Franz Kafka',
                'image' => 'covers/metamorfosis.jpg',
                'description' => '«Al despertar Gregorio Samsa una mañana, tras un sueño intranquilo, se encontró en su cama
                convertido en un monstruoso insecto.»
                Tal es el abrupto comienzo, que nos sitúa de raíz bajo unas reglas distintas, de " La metamorfosis " , sin
                duda alguna la obra de Franz Kafka que ha alcanzado mayor celebridad.
                Escrito en 1912 y publicado en 1916, este relato es considerado una de las obras maestras del siglo xx por sus
                innegables rasgos precursores y el caudal de ideas e interpretaciones que desde siempre ha suscitado. Completan
                este volumen los relatos «Un artista del hambre» y «Un artista del trapecio».',
            ],
            [
                'title' => 'Moby Dick',
                'author' => 'Herman Melville',
                'image' => 'covers/moby-dick.jpg',
                'description' => 'Es una edición de lujo, con una traducción impecable, cuidadosamente anotada e ilustrada,
                absolutamente fiel a la primera edición americana de esta novela, Moby-Dick, considerada como la gran epopeya en
                prosa del mundo occidental contemporáneo. Concebida por Herman Melville como respuesta norteamericana a la gran
                literatura europea de finales del siglo XVIII y principios del XIX, «Moby-Dick» recoge la tradición romántica y
                gótica dando forma a un épico poema en singular prosa que ha acabado por ocupar en Estados Unidos el puesto de
                gran novela nacional.',
            ],
            [
                'title' => 'Crimen y Castigo',
                'author' => 'Fiódor Dostoievski',
                'image' => 'covers/crimen-castigo.jpg',
                'description' => 'La obra definitiva sobre la culpa, todo un clásico de la literatura universal. Considerada
                por la crítica como la primera obra maestra de Dostoievski, Crimen y castigo es un profundo análisis psicológico
                de su protagonista, el joven estudiante Raskólnikov, cuya firme creencia en que los fines humanitarios justifican
                la maldad le conduce al asesinato de una usurera. Pero, desde que comete el crimen, la culpabilidad será una
                pesadilla constante con la que el estudiante será incapaz de convivir.
                La presente edición de una de las obras más importantes de la literatura universal cuenta con la célebre
                traducción de Rafael Cansinos Assens, revisada y modernizada para la ocasión. Asimismo, viene acompañada de
                una introducción de David McDuff, traductor y crítico literario especialista en la obra del autor.',
            ],
            [
                'title' => 'El Alquimista',
                'author' => 'Paulo Coelho',
                'image' => 'covers/alquimista.jpg',
                'description' => 'El Alquimista ha encontrado devotos seguidores en todo el mundo. Publicada en más de 170
                países, es una de las novelas más traducidas del mundo (83 lenguas) y ha convertido a Paulo Coelho en uno de
                los autores más leídos de la historia. Poderosa, sencilla, sabia e inspiradora, ésta es la historia de
                Santiago, un joven pastor andaluz que viaja desde su tierra natal hacia el desierto egipcio en busca de un
                tesoro oculto en las pirámides. Nadie sabe lo que contiene el tesoro, ni si Santiago será capaz de superar
                los obstáculos del camino. Pero lo que comienza como un viaje en busca de riquezas se convierte en un
                descubrimiento del tesoro interior.
                Rica, evocadora y profundamente humana, la historia de Santiago es un testimonio eterno de la fuerza
                transformadora de nuestros sueños y de la importancia de escuchar a nuestros corazones.',
            ],
            [
                'title' => 'Anna Karenina',
                'author' => 'Lev Tolstói',
                'image' => 'covers/anna.jpg',
                'description' => 'En 1887, ocho años después de la publicación de Guerra y paz -uno de los más grandes monumentos
                de la historia de la literatura, ya presente en esta colección-, Lev Tolstói (1828-1910) pone punto final a su
                novela Anna Karénina, otra de sus grandísimas novelas. Inspirada en algunos hechos reales, la historia tiene como
                eje el adulterio de la protagonista; sin embargo, éste es sólo parte de una de las tres historias conyugales que
                se entrelazan en la obra con sus pasiones, sus sufrimientos y sus alegrías, y en todas las cuales late, enorme,
                esa pulsión de vida que pocos autores como Tolstói han sabido imprimir a los personajes de sus novelas.',
            ],
            [
                'title' => 'Dune',
                'author' => 'Frank Herbert',
                'image' => 'covers/dune.jpg',
                'description' => 'La mayor epopeya de todos los tiempos, en nueva edición con la traducción corregida en 2019.
                Contiene 12 ilustraciones a color del artista Sam Weber. Dune será siempre considerada el gran triunfo de la
                imaginación que convirtió a Frank Herbert en uno de los grandes visionarios de la literatura universal.
                Hoy este gran clásico vuelve a estar de actualidad porque pronto inspirará una película y una serie de televisión
                dirigidas por Denis Villeneuve, el director de Arrival y Blade Runner 2049. Es hora, pues, de reivindicar un
                libro mítico con esta edición para coleccionistas que reproduce las doce ilustraciones interiores,
                firmadas por el prestigioso ilustrador Sam Weber, de la aclamada edición estadounidense,',
            ],
            [
                'title' => 'La Teoría Sintergica',
                'author' => 'Jacobo Grinberg',
                'image' => 'covers/sintergia.jpg',
                'description' => '¿Es posible modificar el mundo que percibimos con el poder de nuestra mente? ¿Existen otras
                realidades además de la que conocemos? El doctor Jacobo Grinberg explora más allá de los límites del cerebro
                humano. La realidad tal y como la percibimos, desde el punto de vista de la física cuántica, está conformada
                por una red compleja mejor conocida como lattice, pero para el doctor Grinberg esta es resultado, a su vez,
                de la percepción y la actividad neuronal de cada individuo. Para demostrarlo, desarrolló su famosa teoría
                sintérgica en donde explica que los distintos niveles de realidad son resultado de la interacción entre el
                campo neuronal y la lattice.',
            ],
            [
                'title' => 'El señor de los Anillos',
                'author' => 'J.R.R. Tolkien',
                'image' => 'covers/tolkien.jpg',
                'description' => 'Los Anillos de Poder fueron forjados en antiguos tiempos por los herreros Elfos, y Sauron,
                el Señor Oscuro, forjó el Anillo Único. Pero en una ocasión se lo quitaron, y aunque lo buscó por toda la
                Tierra Media nunca pudo encontrarlo. Al cabo de muchos años fue a caer casualmente en manos del hobbit Bilbo
                Bolsón. Desde la Torre Oscura de Mordor, el poder de Sauron se extendió alrededor. Llegó a reunir todos los
                Grandes Anillos, pero continuaba buscando el Anillo Único, que completaría el dominio de Mordor. Bilbo
                desapareció durante la celebración de su centesimodecimoprimer cumpleaños, y dejó a Frodo a cargo del Anillo,
                y con una peligrosa misión por delante: atravesar la Tierra Media, internarse en las sombras del País Oscuro
                y destruir en Anillo arrojándolo en las Grietas del Destino. El Señor de los Anillos cuenta la gran misión
                cumplida por Frodo y sus amigos: Gandalf el Mago, Merry, Pippiny Sam, Gimli el Enano, Legolas el Elfo, y un
                hombre extraño y misterioso llamado Trancos.',
            ],
            [
                'title' => 'Ulises',
                'author' => 'James Joyce',
                'image' => 'covers/ulises.jpg',
                'description' => 'Uno de los clásicos indiscutibles del siglo XX en una cuidada edición. Ulises es una novela
                del escritor irlandés James Joyce, publicada en 1922. Es considerada por gran parte de la crítica la mejor
                novela en idioma inglés del siglo XX.Su título proviene del protagonista de la versión latina de la Odisea
                de Homero, originalmente llamado en griego Odiseo.
                Según el crítico y traductor español Francisco García Tortosa, Ulises es una de las novelas más influyentes,
                discutidas y renombradas del siglo XX. El libro ha sido objeto de numerosos y profundos estudios, críticas y
                controversias; una obra que ninguna persona interesada en la literatura debe perderse. Ulises relata el paso
                por Dublín de su personaje principal, Leopold Bloom y de Stephen Dedalus. Ambos, según algunos autores, álter
                egos del autor: Leopold (Joyce viejo) y Stephen (joven), durante un día cualquiera, el 16 de Junio de 1904.
                Joyce escogió esa fecha porque fue el día en que se citó por primera vez con la que después sería su esposa,
                Nora Barnacle. Existe todo un sistema de paralelismos (lingüísticos, retóricos y simbólicos) entre el libro y
                la Odisea de Homero(por ejemplo, la correlación entre Bloom y Odiseo, así como la que existe entre Stephen
                Dedalus y Telémaco). Una obra cumbre de la literatura mundial, ahora en una edición cuidada.',
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
