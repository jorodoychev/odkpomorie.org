<?php
include('templates/header.php');
?>
    <main>
        <section id="timetable">
            <div class="container m-auto">
                <h2 class="mt-4">График на учебния процес</h2>
            </div>
            <table class="table table-bordered table-timetable mt-4">
                <thead class="thead-light">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Понеделник</th>
                    <th scope="col">Вторник</th>
                    <th scope="col">Сряда</th>
                    <th scope="col">Четвъртък</th>
                    <th scope="col">Петък</th>
                    <th scope="col">Събота</th>
                </tr>
                </thead>
                <tbody>
                <tr class="folk-text">
                    <th scope="row">
                        <h5>Народни танци</h5>
                        <p>В. Данаилов, Г. Дойчев</p>
                    </th>
                    <td>
                        <p>17:00 - 18:10 I група</p>
                        <p>19:30 - 21:00 III група</p>
                    </td>
                    <td>
                        <p>17:00 - 18:10 II група</p>
                        <p>18:15 - 19:00 ИР</p>
                        <p>19:30 - 21:00 IV група</p>
                    </td>
                    <td>
                        <p>17:00 - 18:10 I група</p>
                        <p>19:30 - 21:00 III група</p>
                    </td>
                    <td>
                        <p>17:00 - 17:40 ИР</p>
                        <p>18:00 - 19:30 III група</p>
                        <p>19:30 - 21:00 IV група</p>
                    </td>
                    <td>
                        <p>17:00 - 18:10 II група</p>
                        <p>19:30 - 21:00 IV група</p>
                    </td>
                    <td></td>
                </tr>
                <tr class="eng-text">
                    <th scope="row">
                        <h5>Английски език</h5>
                        <p>Д. Власковска</p>
                    </th>
                    <td>
                        <p>09:00 - 09:30 ДГ I</p>
                        <p>09:30 - 10:00 ДГ II</p>
                        <p>15:30 - 16:00 III група<br>/I клас/</p>
                        <p>16:00 - 17:00 V група<br>/II клас/</p>
                    </td>
                    <td>
                        <p>13:45 - 14:30 ИР<br>/V клас/</p>
                        <p>14:45 - 15:45 VI група<br>/IV клас/</p>
                        <p>16:00 - 17:00 IV група<br>/III клас/</p>
                    </td>
                    <td>
                        <p>09:00 - 09:30 ДГ I</p>
                        <p>09:30 - 10:00 ДГ II</p>
                        <p>15:30 - 16:00 III група<br>/I клас/</p>
                        <p>16:00 - 17:00 V група<br>/II клас/</p>
                    </td>
                    <td>
                        <p>13:45 - 14:30 ИР<br>/V клас/</p>
                        <p>14:45 - 15:45 VI група<br>/IV клас/</p>
                        <p>16:00 - 17:00 IV група<br>/III клас/</p>
                    </td>
                    <td>
                        <p>09:00 - 09:30 ДГ I</p>
                        <p>09:30 - 10:00 ДГ II</p>
                    </td>
                    <td></td>
                </tr>
                <tr class="paint-text">
                    <th scope="row">
                        <h5>Изобразително изкуство</h5>
                        <p>Т. Талева</p>
                    </th>
                    <td>
                        <p>12:30 - 13:40 III група</p>
                        <p>14:00 - 15:30 IV група</p>
                    </td>
                    <td>
                        <p>09:00 - 10:00 ДГ I</p>
                        <p>10:30 - 11:00 ДГ II</p>
                        <p>13:00 - 14:30 V Група</p>
                    </td>
                    <td>
                        <p>12:30 - 13:40 III група</p>
                        <p>14:00 - 15:30 IV група</p>
                    </td>
                    <td>
                        <p>09:00 - 10:00 ДГ I</p>
                        <p>10:30 - 11:00 ДГ II</p>
                        <p>13:00 - 14:30 V Група</p>
                    </td>
                    <td></td>
                    <td>
                        <p>13:00 - 16:00 VI група</p>
                    </td>

                </tr>
                <tr class="music-text">
                    <th scope="row">
                        <h5>Вокално студио</h5>
                        <p>А. Данаилова</p>
                    </th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <p>12:00 - 13:30</p>
                    </td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </section>
        <section id="timetable_responsive">
            <ul class="list-group">
                <li class="list-group-item list-group-item text-center days">Понеделник</li>
                <li class="list-group-item list-group-item text-center folk-text">Народни танци
                    <p>В. Данаилов, Г. Дойчев</p>
                    <p>17:00 - 18:10 I група</p>
                    <p>19:30 - 21:00 III група</p>
                </li>
                <li class="list-group-item list-group-item text-center eng-text">Английски език
                    <p>Д. Власковска</p>
                    <p>09:00 - 09:30 ДГ I</p>
                    <p>09:30 - 10:00 ДГ II</p>
                    <p>15:30 - 16:00 III група /I клас/</p>
                    <p>16:00 - 17:00 V група /II клас/</p>
                </li>
                <li class="list-group-item list-group-item text-center paint-text">Изобразително изкуство
                    <p>Т. Талева</p>
                    <p>12:30 - 13:40 III група</p>
                    <p>14:00 - 15:30 IV група</p>
                <li class="list-group-item list-group-item text-center days">Вторник</li>
                <li class="list-group-item list-group-item text-center folk-text">Народни танци
                    <p>В. Данаилов, Г. Дойчев</p>
                    <p>17:00 - 18:10 I група</p>
                    <p>19:30 - 21:00 III група</p>
                </li>
                <li class="list-group-item list-group-item text-center eng-text">Английски език
                    <p>Д. Власковска</p>
                    <p>09:00 - 09:30 ДГ I</p>
                    <p>09:30 - 10:00 ДГ II</p>
                    <p>15:30 - 16:00 III група /I клас/</p>
                    <p>16:00 - 17:00 V група /II клас/</p>
                </li>
                <li class="list-group-item list-group-item text-center paint-text">Изобразително изкуство
                    <p>Т. Талева</p>
                    <p>12:30 - 13:40 III група</p>
                    <p>14:00 - 15:30 IV група</p>
                <li class="list-group-item list-group-item text-center days">Сряда</li>
                <li class="list-group-item list-group-item text-center folk-text">Народни танци
                    <p>В. Данаилов, Г. Дойчев</p>
                    <p>17:00 - 18:10 I група</p>
                    <p>19:30 - 21:00 III група</p>
                </li>
                <li class="list-group-item list-group-item text-center eng-text">Английски език
                    <p>Д. Власковска</p>
                    <p>09:00 - 09:30 ДГ I</p>
                    <p>09:30 - 10:00 ДГ II</p>
                    <p>15:30 - 16:00 III група /I клас/</p>
                    <p>16:00 - 17:00 V група /II клас/</p>
                </li>
                <li class="list-group-item list-group-item text-center paint-text">Изобразително изкуство
                    <p>Т. Талева</p>
                    <p>12:30 - 13:40 III група</p>
                    <p>14:00 - 15:30 IV група</p>
                <li class="list-group-item list-group-item text-center days">Четвъртък</li>
                <li class="list-group-item list-group-item text-center folk-text">Народни танци
                    <p>В. Данаилов, Г. Дойчев</p>
                    <p>17:00 - 18:10 I група</p>
                    <p>19:30 - 21:00 III група</p>
                </li>
                <li class="list-group-item list-group-item text-center eng-text">Английски език
                    <p>Д. Власковска</p>
                    <p>09:00 - 09:30 ДГ I</p>
                    <p>09:30 - 10:00 ДГ II</p>
                    <p>15:30 - 16:00 III група /I клас/</p>
                    <p>16:00 - 17:00 V група /II клас/</p>
                </li>
                <li class="list-group-item list-group-item text-center paint-text">Изобразително изкуство
                    <p>Т. Талева</p>
                    <p>12:30 - 13:40 III група</p>
                    <p>14:00 - 15:30 IV група</p>
                <li class="list-group-item list-group-item text-center days">Петък</li>
                <li class="list-group-item list-group-item text-center folk-text">Народни танци
                    <p>В. Данаилов, Г. Дойчев</p>
                    <p>17:00 - 18:10 I група</p>
                    <p>19:30 - 21:00 III група</p>
                </li>
                <li class="list-group-item list-group-item text-center eng-text">Английски език
                    <p>Д. Власковска</p>
                    <p>09:00 - 09:30 ДГ I</p>
                    <p>09:30 - 10:00 ДГ II</p>
                    <p>15:30 - 16:00 III група /I клас/</p>
                    <p>16:00 - 17:00 V група /II клас/</p>
                </li>
                <li class="list-group-item list-group-item text-center paint-text">Изобразително изкуство
                    <p>Т. Талева</p>
                    <p>12:30 - 13:40 III група</p>
                    <p>14:00 - 15:30 IV група</p>
            </ul>
        </section>
    </main>
<?php
include('templates/footer.php');
?>