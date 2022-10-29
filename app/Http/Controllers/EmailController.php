<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;
use App\Models\Order;
use Carbon\Carbon;
use Webpayby\WsbApi\Request\GetTransactionStatusRequest;
use Illuminate\Support\Facades\Log;

class EmailController extends Controller
{

    public function open($token) {
        //$data = $request->all();
        //$token = $data['token'];
        if(!$token) {
            return redirect('/');
        }
        else {
            return view('course')->with('token', $token);
        }
    }

    public function notify(Request $request)
    {
//        $data = $request->all();
//        $order = Order::find($data['site_order_id']);
//        $email = $order->email;
//        $order->active_status = 1;
//        $order->payment_status = 1;
//        $order->save();
//
//
//        if($data['payment_type'] == '1' || $data['payment_type'] == '4') {
//            $details['link'] = "https://profguide.org/course-order/".$data['site_order_id'];
//            $details['date'] = Carbon::now()->addDays(7)->addHours(3)->format('d/m/Y H:i:s');
//            Mail::to($email)->send(new \App\Mail\Notification($details));
//
//            Mail::to("teenjob.by@gmail.com")->send(new \App\Mail\NotificationPayment($details));
//        }
//
//        return response()->json(200);

        $data = $request->all();
        $order = Order::find($data['site_order_id']);
        //$LOGIN = 'root';
        //$PASSWORD = '123';
        //$HOST = 'https://payment.webpay.by/WSBApi';
        //$BILLING_ID = '509438816';

        $transactionStatus = (new GetTransactionStatusRequest("https://billing.webpay.by/WSBApi2", "Aleksey", "s6y~}%#p", "509438816"))->setStartYear('2020')->setStartMonth('12')->setOrderNum($data['site_order_id'])->send();
	Log::debug("answer1");
        Log::debug(print_r(($transactionStatus->getTransaction())[0], true));
	Log::debug(count($transactionStatus->getTransaction()));
        if(count($transactionStatus->getTransaction()) == 1) {

  
            $email = ($transactionStatus->getTransaction())[0]->payer_email;
            $order->email = $email;
            $order->active_status = 1;
            $order->payment_status = 1;
            $status = ($transactionStatus->getTransaction())[0]->status;
            $amount = ($transactionStatus->getTransaction())[0]->amount;
            $order->save();
            if($status === "Authorized") {
                $details['link'] = "https://profguide.org/course-order/".$data['site_order_id'];
                $details['date'] = Carbon::now()->addDays(7)->addHours(3)->format('d/m/Y H:i:s');

                if(($amount == 29) || ($amount == 890))  {
                    Mail::to($email)->send(new \App\Mail\NotificationCourse($details));
                }
                else {
                    Mail::to($email)->send(new \App\Mail\Notification($details));
                }


                Mail::to("teenjob.by@gmail.com")->send(new \App\Mail\NotificationPayment($details));
            }
            return response()->json(200);
        }



        return response()->json(200);
    }
    public function sendEmail(Request $request)
    {
        $data = $request->all();

        if(strpos($data['workplace'], 'inside') !== false)
        {
            $data['workplace'] = "Остаюсь дома";
            $data['workplaceorigin'] = "inside";
        }
        else {
            $data['workplace'] = "Иду/еду на работу";
            $data['workplaceorigin'] = "outside";
        }

        if(strpos($data['cat'], 'wild') !== false)
        {
            $data['cat'] = "Дикий котик";
        }
        else {
            $data['cat'] = "Домашний котик";
        }
        if(isset($data['role'])) {
            switch ($data['role']) {
                case "1":
                    $data['role'] = "Сотрудник в команде - твоя основная задача вместе с командой произвести продукт или оказать услугу. Вы все вместе добиваетесь поставленной перед вами общей цели, и попутно личных профессиональных целей.";
                    break;
                case "2":
                    $data['role'] = "Руководитель команды или подразделения - твоя задача как руководителя планировать, ставить сотрудикам задачи, сроки и контролировать достижение общей цели, стоящей перед командой или подразделением. Он сам практически не выполняет работу. Например, руководитель дизайнерского отдела сам практически не имеет времени на практику в дизайне, но раз он стал руководителем, то у него уже есть многолетний опыт и он его использует для координации команды и менторства. Он сам ответственен за работу сотрудников подразделения/команды и достижение целей.";
                    break;
                case "3":
                    $data['role'] = "Отдельно работающий профессионал - у тебя отдельный кабинет или ты работаешь удаленно, твои услуги высоко ценятся и ты единственный специалист, к которому обращаются в компании для решения определенного ряда вопросов. Ты работаешь в основном самостоятельно, а не в команде.";
                    break;
                case "4":
                    $data['role'] = "Основатель/один из основателей - твоя задача строить прибыльный бизнес, анализировать показатели и принимать стратегически важные решения, от которых будет зависеть судьба компании. Основатели ставят задачи перед рукововодителями и следят за достижением высокоуровневых целей, а также решают какова будет корпоративная культура компании. Основная забота основателя, чтобы его бизнес был конкурентоспособным и прибыльным.";
                    break;
            }
        }

        if(isset($data['talents'])) {
            $data['talents'] = explode(',', $data['talents']);
            $talents = $data['talents'];
            $talentsdesc = [
                "Академический. Желание познавать мир через точные науки или же наоборот гуманитарные, открывать новые закономерности, узнавать самому и, иногда, просвещать других. Сфера таких людей - наука, исследования, изобретения.",
                "Практический. Основная ценность для таких людей - это получение практического результата, а знания их интересуют только постольку поскольку они могут пригодиться в деле (обычно такие люди неравномерно учатся в школе и в университете, они берут только то, что считают для себя полезным, а не учат все). Подходящая сфера - спорт, бизнес, ремесло, строительство, инженерия, а также программирование, дизайн, звукорежиссура, видеомонтаж и любые другие профессии, в которых явно виден результат труда.",
                "Социальный (Личностный). Основная ценность для таких людей - это помогать и приносить пользу людям, обществу. Обычно людям такого склада свойственны професси как педагог, тренер, врач, психолог, HR (управление и развитие персонала).",
                "Эмоциональный. Таким людям нередко нравится смотреть драматические сериалы и фильмы и переживать за героев. Они очень хорошо понимают эмоции других людей и ориентируются в социальной ситуации, понимают как оказать воздействие на собеседника или группу. Обычно люди этого типа выступают как - политик, лидер, спикер.",
                "Артистический. Люди с этим видом одаренности проявляют себя этому миру через свое искусство - музыкант, художник (2d, 3d - художник), певец, актер, ведущий(ая), звукорежиссер, видеомонтажер и т.д.",
                "Окружающей среды. Эти люди проявляют неподдельный интерес к растениям, животным, водным пространствам и т.д. И профессии они выбирают связанные с экологией, климатом, дрессурой, уходом за животными или растениями, деревьями и т.д.",
                "Духовно-ценностный. Для людей с этой одаренностью основная ценность - это мир во всем мире и помощь миру. Сферы деятельности - религия, благотворительность, социальные проекты/миссии."
            ];
            $data['resulttalents'] = [];
            for ($i = 0; $i < count($talents); $i++) {
                if (filter_var($talents[$i], FILTER_VALIDATE_BOOLEAN)) {
                    array_push($data['resulttalents'], $talentsdesc[$i]);
                }
            }
        }

        if(isset($data['departments'])) {
            $data['departments'] = explode(',', $data['departments']);
            $departments = $data['departments'];
            $departmentsdesc = [
                "Производство продукта/услуги. Каждая компания что-то производит. На кондитерской фабрике люди, занятые в производстве - это кондитеры, тестомесы, заготовщики, пекари. А в IT-компании - это программисты, дизайнеры, девопсы, тестировщики, проектные менеджеры, системные администраторы и т.д. Это непосредственно те люди, которые участвуют в создании конечного продукта для потребителя/компании.",
                "Склад. Люди, работающие на складе, должны следить что-бы хватало всего необходимого для производства товаров и  услуг, заказывать и выдавать это все для производства во время и в надлежащем качестве.",
                "Отдел исследований и инновационных разработок. Данный отдел работает над улучшением текущего продукта и созданием нового с улучшенными характеристиками для существующих клиентов компании или для привлечения новых. Данный отдел тесно работает с маркетинговым, чтобы создать успешный продукт, который будет пользоваться популярностью, эффективно решать проблему клиента и приносить прибыль.",
                "Маркетинговый отдел. Вопрос, который себе всегда задают маркетологи: \"Чего хочет клиент?\". Маркетологи тщательно изучают своего клиента, его желания и страхи, чтобы подсказать какую \"изюминку\" добавить в продукт, как его назвать, упаковать и преподнести, чтобы клиент покупал именно у нас. Также маркетологи отслеживают показатели спроса на различные продукты, занимаются его рекламой и продвижением, отслеживают, что делают конкуренты. Основная цель - привести как можно больше клиентов.",
                "Продажи. Люди, работающие в отделе продаж, болтуны от природы в хорошем смысле слова. Им нравится подолгу общаться с людьми, они позитивны, энергичны, легко заводят знакомства и выстраивают дружеские отношения. 80-90% рабочего времени они в коммуникации с конкретными клиентами, рассказывают о преимуществах продукта и \"убеждают\" клиента его приобрести.",
                "HR-отдел (отдел по работе с персоналом). Сотрудники этого отдела производят набор, отбор и адаптацию новых сотрудников, а также заботится об образовании, развитии и проведении корпоративного досуга текущих. Для HR-отдела важно, чтобы входящий в компанию новый человек соответствовал корпоративной культуре организации, т.е. легко влился в коллектив и не создавал в нем проблем, а также был подходящим специалистом для данной вакансии.",
                "Логистика. Этот отдел отвечает за доставку товара клиентам во время в целостности и сохранности.",
                "Служба безопасности. Охрана собственности компании и порядка в ее стенах.",
                "Юридический отдел. Правовая защита компании, ее интеллектуальной и материальной собственности, составление грамотных договоров, которые уберегут компанию от проблем с клиентами и партнерами в будущем.",
                "Аналитический отдел. Анализ показателей бизнеса, ведение и предоставление отчетности (бухгалтерия, финансовый менеджмент). На основе предоставляемой аналитики руководители организации принимают ключевые решения.",
                "Топ-менеджмент. Управление организацией на высшем уровне, принятие ключевых решений, заключение договоров с партнерамис партнерами. Топ-менеджер ответственен за всю работу организации, ее прибыльность или по отдельным крупным направлениям компании."
            ];
            $data['resultdepartments'] = [];
            for ($i = 0; $i < count($departments); $i++) {
                if (filter_var($departments[$i], FILTER_VALIDATE_BOOLEAN)) {
                    array_push($data['resultdepartments'], $departmentsdesc[$i]);
                }
            }
        }

        $details = [
            'age' => (!empty($data['age'])) ? $data['age'] : "",
            'country' => (!empty($data['country'])) ? $data['country'] : "",
            'city' => (!empty($data['city'])) ? $data['city'] : "",
            'skills' => (!empty($data['skills'])) ? $data['skills'] : "",
            'stepANotes' => (!empty($data['stepANotes'])) ? $data['stepANotes'] : NULL,

            'futurePlace' => (!empty($data['futurePlace'])) ? $data['futurePlace'] : "",
            'futurePlaceDescription' => (!empty($data['futurePlaceDescription'])) ? $data['futurePlaceDescription'] : "",
            'currentPlace' => (!empty($data['currentPlace'])) ? $data['currentPlace'] : "",
            'upTime' => (!empty($data['upTime'])) ? $data['upTime'] : "",
            'morningDeals' => (!empty($data['morningDeals'])) ? $data['morningDeals'] : "",
            'afterMorningDeals' => (!empty($data['afterMorningDeals'])) ? $data['afterMorningDeals'] : "",
            'workplaceorigin' => (!empty($data['workplaceorigin'])) ? $data['workplaceorigin'] : "",
            'workplace' => (!empty($data['workplace'])) ? $data['workplace'] : "",
            'building' => (!empty($data['building'])) ? $data['building'] : "",
            'size' => (!empty($data['size'])) ? $data['size'] : "",
            'role' => (!empty($data['role'])) ? $data['role'] : "",
            'stepCompanyNotes' => (!empty($data['stepCompanyNotes'])) ? $data['stepCompanyNotes'] : NULL,

            'remoteType' => (!empty($data['remoteType'])) ? $data['remoteType'] : "",
            'interestsDesc' => (!empty($data['interestsDesc'])) ? $data['interestsDesc'] : "",
            'activitiesDesc' => (!empty($data['activitiesDesc'])) ? $data['activitiesDesc'] : "",
            'talents' => ((!empty($data['resulttalents'])) ? $data['resulttalents'] : NULL),
            'steptalentsTalentsDescription' => (!empty($data['steptalentsTalentsDescription'])) ? $data['steptalentsTalentsDescription'] : "",

            'departments' => ((!empty($data['resultdepartments'])) ? $data['resultdepartments'] : NULL),
            'stepDepartmentsNotes' => (!empty($data['stepDepartmentsNotes'])) ? $data['stepDepartmentsNotes'] : NULL,

            'future' => (!empty($data['future'])) ? $data['future'] : "",
            'steps' => (!empty($data['steps'])) ? $data['steps'] : "",

            'cat' => (!empty($data['cat'])) ? $data['cat'] : "",
            'email' => (!empty($data['email'])) ? $data['email'] : "",

            'impression' => (!empty($data['impression'])) ? $data['impression'] : "",
            'critic' => (!empty($data['critic'])) ? $data['critic'] : "",
            'advice' => (!empty($data['advice'])) ? $data['advice'] : "",
        ];


        //Mail::send(new \App\Mail\MyTestMail($details), $details, function($message)use($details, $pdf) {
        //    $message->to($details["email"], $details["email"])
        //        ->subject("Profguide - Курс")
        //        ->attachData($pdf->output(), "profguide.pdf");
        //});

        Mail::to($details['email'])->send(new \App\Mail\MyTestMail($details));
	Mail::to("profguide@teenjob.by")->send(new \App\Mail\MyTestMailBackup($details));

        Mail::to("teenjob.by@gmail.com")->send(new \App\Mail\Feedback($details));




        $token = $request->cookie('course');

        $ordertoken = Order::find($token);

        if($ordertoken) {
            if(($ordertoken->payment_status == 1)) {
                if($token != "testing") {
                    $ordertoken->payment_status = 10;
                    $ordertoken->save();
                }
            }
        }
        else {
            return response()->json(500);
        }


        return response()->json(200);
    }
}
