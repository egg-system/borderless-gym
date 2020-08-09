@extends('templates.landing-page')

@section('head')
@parent
<link href="{{ mix('css/pages/service-term.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="service-term">
    <div class="title">利用規約</div>
    <div class="article">
        <div class="article-title">第1条（総則）</div>
        <ol class="paragraph-list">
            <li>本利用規約は、株式会社エッグシステム（以下「弊社」といいます。）が提供するサービス「BorderlessGYM（ボーダーレスジム）」（以下「本サービス」といいます。）の利用者が遵守すべき事項及び利用者と弊社との関係を定めるものです。</li>
            <li>本サービスの利用者は、本利用規約の内容を十分理解した上でその内容を遵守することに同意して本サービスを利用するものとし、本サービスを利用した場合には、当該利用者は本利用規約を遵守することに同意したものとみなします。</li>
        </ol>
        <div class="article-title">第2条（定義）</div>
        <div>
            本利用規約の中で使用される以下の各用語は、それぞれ以下の意味を有するものとします。<br>
              「本サービス」　：本サービスのサイト閲覧や本サービスに付随するメール配信等を利用した業務委託に関する情報提供サービスの総称のことをいいます。<br>
              「会員」　　　　：本サービスで所定の会員登録手続を行って弊社から登録の承諾を受けた個人又は法人をさします。<br>
              「利用者」　　　：会員又は非会員を問わず本サービスの提供を受ける個人又は法人で、本サービスのサイト閲覧者も含みます。<br>
              「トレーナー」　：本サービスを通じて業務を引き受け、又は引き受けようとする個人をさします。<br>
              「ジム」　　　　：本サービスを通して業務を委託しようとする個人又は法人をさします。<br>
              「マッチング」　：ジムとトレーナーが本サービス内でやり取りを行える状態になったことをさします。<br>
              「成約」　　　　：ジムとトレーナーの間での業務委託契約が成立することをさします。<br>
              「本取引」　　　：本サービスを利用して行われるジムとトレーナーの間での業務委託契約をいいます。<br>
              「登録情報」　　：会員登録手続で入力・提供された一切の情報をさします。<br>
              「個人情報」　　：住所・氏名・電子メールアドレス等特定の個人を識別できる情報をいいます。<br>
              「秘密情報」　　：会員がサービスを通じて他の会員から得た、技術、開発、営業、計画、ノウハウなどに関する一切の情報のことをいいます。<br>
        </div>
        <div class="article-title">第3条（本利用規約の変更）</div>
        <ol class="paragraph-list">
            <li>弊社は、次の各号の一に該当する場合、各利用者から個別の同意を得ることなく弊社の裁量で本利用規約を変更することができるものとします。
                <ol class="parentheses-list">
                    <li>利用規約の変更が、利用者の一般の利益に適合する場合</li>
                    <li>利用規約の変更が、契約をした目的に反せず、かつ、変更の必要性、変更後の内容の相当性、その他の変更に係る事情に照らして合理的なものである場合</li>
                </ol>
            </li>
            <li>前項に基づく本利用規約の変更にあたり、弊社は、利用者に対して、変更後の利用規約の効力発生日及び変更内容について、事前に以下の各号の一の方法により周知するものとします。
                <ol class="parentheses-list">
                    <li>本サービスへの掲載</li>
                    <li>会員への電子メールの送信</li>
                    <li>その他弊社が適切と判断した方法</li>
                </ol>
            </li>
            <li>変更後の利用規約の効力発生日以降に利用者が本サービスを利用した場合、本利用規約の変更に同意したものとみなします。</li>
            <li>規約の変更により利用者に損害が生じた場合であっても、弊社は一切の責任を負いません。</li>
        </ol>
        <div class="article-title">第4条（会員登録）</div>
        <ol class="paragraph-list">
            <li>会員登録手続を行うことができるのは、その会員となる本人（法人の場合には対外的な契約権限を有する者）に限るものとし、代理人による会員登録は認められないものとします。</li>
            <li>会員登録手続を行う者は、登録情報の入力にあたり、入力した情報は全て真実であることを保証するものとします。</li>
            <li>登録した情報全てにつき、その内容の正確性・真実性・最新性等一切について、会員自らが責任を負うものとします。</li>
            <li>会員として登録できる者の資格・条件は以下の通りです。但し、法人の場合には第１号及び第２号は適用されません。
                <ol class="parentheses-list">
                    <li>満18歳以上であること。</li>
                    <li>未成年である場合には法定代理人の包括的な同意を得ていること。</li>
                    <li>電子メールアドレスを保有していること。</li>
                    <li>既に本サービスの会員となっていないこと。</li>
                    <li>本利用規約の全ての条項に同意すること。</li>
                    <li>過去、現在又は将来にわたって、暴力団等の反社会的勢力に所属せず、これらのものと関係を有しないこと。</li>
                </ol>
            </li>
            <li>弊社は、会員登録手続を行った個人又は法人が以下の各号に該当する場合、会員として登録することを承諾しない場合があります。また、承諾・登録後であっても、会員について以下の各号に該当する事実が判明した場合には、承諾・登録を取り消すことがあります。
                <ol class="parentheses-list">
                    <li>会員登録の資格・条件を満たさない場合又は満たさなくなった場合。</li>
                    <li>入力された登録情報に虚偽の情報があることが判明した場合。</li>
                    <li>弊社からの電子メールを受領できない場合。</li>
                    <li>本利用規約に違反する行為を行った場合。</li>
                    <li>その他弊社が当該会員の登録が不適切であると判断した場合。</li>
                </ol>
            </li>
            <li>登録情報及び本サービスの利用において弊社が知り得た利用者の情報については、別途定める「個人情報保護方針」に従って取り扱われるものとし、利用者はこれに同意するものとします。</li>
            <li>会員が退会を希望する場合には、所定の手続きを行うこととします。但し、当該会員が以下に定める状況にある間は退会できないものとします。
                <ol class="parentheses-list">
                    <li>自らがトレーナーまたはジムとして成立した本取引の業務が終了していない場合。</li>
                    <li>自らがトレーナーまたはジムとして成立した本取引の決済手続きが完了していない場合。</li>
                </ol>
            </li>
        </ol>
        <div class="article-title">第5条（本サービスの内容）</div>
        <ol class="paragraph-list">
            <li>弊社は本サービスによる情報提供を通じて、業務委託契約を行うためのツール及びプラットフォームの提供を行います。</li>
            <li>本サービスは、ジムとトレーナーが直接業務委託契約を締結することを目的とするものであり、弊社は本取引の当事者とはなりません。 但し、本取引に基づくジムからトレーナーに対する報酬の支払事務は、第7条 に定めるところにより、弊社がトレーナーに代わり当該報酬を受領し、それを弊社がトレーナーに引渡すことにより行われるものとします。トレーナーは、本項において、弊社に対して、本規約に定める条件に従いジムからの報酬をトレーナーに代理して受領する権限を付与したものとみなします。</li>
            <li>ジムが、当サービスの決済を利用する場合は、本取引に基づいてトレーナーがジムに対して有する報酬債権は、トレーナーから弊社へ、弊社から弊社が指定する債権回収業者（以下「債権回収業者」といいます。）に対して譲渡されるものとし、ジムは、当該債権譲渡について予め承諾するものとします。ジムは、債権回収業者に対して、債権回収業者の定めるところに従って、トレーナーに対する報酬金相当額を支払うものとします。</li>
            <li>会員が本サービスを利用して契約を締結する場合、契約の形式は業務委託契約とし、トレーナーが業務を行う際に、ジムが業務内容及び遂行方法について具体的な指揮命令を行うことや、トレーナーの業務の遂行場所及び時間を指定する等、ジムの指揮命令及び監督権限を行使することができません。また、契約内容に含まれるか否かにかかわらず、そのような形でトレーナーを扱うことはできないものとします。</li>
            <li>本サービスにおいて弊社は、本取引を行うトレーナー若しくはジムの選定及び本取引に基づく業務の遂行について 、それらの内容・品質・信憑性・適法性・正確性・有用性等の確認及び保証を行わないとともに、その瑕疵に関して一切の責任を負いません。</li>
            <li>ジム及びトレーナーは弊社に対し、本サービスの掲載料および利用料（本利用規約において「システム利用料」といいます。）として、以下の定めに従い、各金員の支払い義務を負うものとします。なお、支払いの時期及び方法については第7条の定めによることとします。
                <ol class="parentheses-list">
                    <li>ジムが本サービスへ登録する際に30,000円（消費税別）をシステム利用料として弊社に支払うものとします。</li>
                    <li>本取引に基づく1ヶ月間の業務が終了した場合には、報酬額の15％（消費税別・１円未満切り捨て）に相当する金額をシステム利用料としてメンバーは弊社に支払うものとします。</li>
                </ol>
            </li>
            <li>会員間での連絡は、原則として本サービス内において行うものとします。但し、弊社が事前に承諾した場合はこれに限りません。</li>
            <li>会員又は過去５年以内に会員であった者は、会員又は過去５年以内に会員であった者と、本サービスを利用せずに、直接に本サービスを通じて委託可能な内容に関する業務委託契約を締結すること及びその勧誘をすることを行ってはならないものとします。但し、弊社が事前に承諾した場合はこの限りではありません。</li>
            <li>本サービスの提供を受けるために必要な、器具、道具、その他の業務遂行において必要な準備及び維持は、利用者の費用と責任において行うものとします。</li>
        </ol>
        <div class="article-title">第6条（取引）</div>
        <ol class="paragraph-list">
            <li>本取引内においては、以下の定めによって報酬を定めるものとします。
                <ol class="parentheses-list">
                    <li>ジムは、当該本取引に基づく業務に対する定額の報酬及び業務開始日を定めます。なお、報酬は業務開始日から1ヶ月間における報酬とします。</li>
                    <li>ジムは、前号の報酬を支払う義務を負います。なお、支払いの時期及び方法については、第7条に定めるところに従うものとします。</li>
                    <li>本取引の内容として、トレーナーがジムに対し遂行した業務を報告することを合意内容とした場合、トレーナーは定められた期限までにジムに報告するものとし、ジムは報告された内容を検収し、トレーナー対して検収結果（合格・不合格）を通知する義務を負うものとします。業務の報告後、1週間以内に、ジムが検収結果を合理的な理由なく報告しない場合、当該検収の結果は、ジムによって合格とされたものとみなします。</li>
                    <li>前号の場合、検収を終えた時点で、ジムは弊社に対し、業務が完了した旨の通知をするものとします。</li>
                </ol>
            </li>
            <li>前項の契約締結に際して、トレーナーとジムの間で業務内容・報酬金額・募集期間等以外に瑕疵担保責任の有無等の取決めを行う必要がある場合は、当事者間で別途合意するものとし、弊社はその合意の存否及び内容について関知せず、その結果生じた損害について一切の責任を負わないものとします。</li>
            <li>業務の完了前に、ジム又はトレーナーの都合により、業務の中断・停止を希望する場合は、ジムとトレーナーの間で協議の上、当事者間が合意した場合に限り、業務の中断及び停止ができるものとします。原則として本取引成立後の契約内容の変更はできないものとします。なお、ジムの責任の有無を問わず、本取引に基づく委託業務の遂行が中断された場合には、それまでにトレーナーが業務を行った時間に応じて、ジムは、トレーナーに対して原則報酬支払義務を負うものとします。</li>
            <li>前項に基づき、業務を中断・停止した場合には、ジムは弊社に対して、その旨について直ちに報告しなければならないものとします。</li>
        </ol>
        <div class="article-title">第7条（決済手続き）</div>
        <ol class="paragraph-list">
            <li>本取引に関する金銭の支払いについては、クレジットカード決済が利用可能です。クレジットカード決済を利用する場合は、弊社が指定する決済サービス以外の決済方法による決済は認められません。</li>
            <li>本取引の報酬の支払時期及び方法については以下の通りとします。なお、本項に定めるとおり、ジムのトレーナーに対する報酬の支払事務については、弊社がトレーナーに代わり当該報酬又は報酬額相当の金銭を受領し、それを弊社がトレーナーに引渡すことにより行われるものとします。また、弊社は、トレーナーに対する報酬又は報酬額相当の金銭の引渡しにあたり、当該報酬又は報酬額相当の金銭の引渡債務と、ジムの弊社に対するシステム利用料の支払債務を対当額にて相殺の上、その残額を引渡すことができるものとします。</li>
            <li>有料オプション利用料の支払いについては、申し込み時に支払うものとします。</li>
            <li>弊社に対するジムの振込手数料については、ジムが負担するものとし、トレーナーに対する弊社の振込手数料については、トレーナーが負担するものとします。</li>
            <li>会員が指定できる振込み先口座は、銀行、ゆうちょ銀行、信用金庫、労働金庫、信用農業協同組合連合会、信用漁業協同組合連合会、農業共同組合のいずれかの日本国内の口座とします。なお、会員が指定した口座情報に不備があり振込みができない場合、組戻しにかかる手数料は会員が負担するものとし、口座情報の不備が解消されるまで、弊社は払い戻しを行わないものとします。</li>
            <li>ジム及びトレーナー間で本取引に関する報酬を直接授受することを禁止します。なお、直接の報酬の授受の有無にかかわらず、ジムは弊社に第２項所定の報酬の払込みを行う義務があるものとします。</li>
            <li>以下の各号に掲げる場合には、本利用規約の規定に拘らず、弊社は、当該本取引の支払事務を終了し、一時的に受け取っていた報酬（以下「仮払い金等」といいます。）をジムに全額返金することができるものとします。但し、返金の際の振込手数料はジムの負担とします。
                <ol class="parentheses-list">
                    <li>業務の完了前に、本取引のいずれかの当事者より、相手方に対して、業務の中断・停止の意思表示があった場合において、相手方が1週間以内に承諾又は不承諾の意思表示を行わず、弊社がこれを確認した場合</li>
                    <li>本取引がジム及びトレーナーの合意により解除され、弊社が受発注者双方からその旨を確認できた場合</li>
                    <li>本取引のいずれかの当事者が、報酬の支払い義務や成果物の引渡し義務等の本取引に基づく義務の履行を遅滞し、相手方又は弊社がその履行を催告したにもかかわらず、当該当事者が1週間以内に同義務を履行しなかった場合</li>
                    <li>本取引の当事者から提供された情報等をもとに、弊社がジム及びトレーナー双方に確認し、債務の本旨にしたがった履行が行われたか否かの点について、当事者間の認識に争いがあることが認められた場合</li>
                    <li>本取引の当事者から提供された情報等をもとに、弊社がジム及びトレーナー双方に確認し、稼働時間又はこれに基づく報酬額について、当事者間に争いがあることが認められた場合</li>
                    <li>本取引成立後、本取引のいずれかの当事者又は弊社が、相手方に対し、本サービスにおける通常の連絡手段を用いて連絡をしたにもかかわらず、１週間以上連絡がとれない状態が継続した場合</li>
                    <li>本取引成立後、業務が完了したにもかかわらず本取引の報酬がトレーナーに支払われず、または業務の中断・停止により仮払い金等がジムに返金されないまま、仮払いが行われた日から１８０日が経過した場合</li>
                    <li>その他弊社が仮払い金等を留保することが不適当であると判断した場合</li>
                </ol>
            </li>
            <li>本条に基づいて、支払い又は返金を行って以後、当事者間の報酬等の支払いに関して、弊社は一切責任を負わないものとします。なお、前項に基づき、弊社が支払事務を終了し、仮払い金等をジムに返金した場合、本条第６項の適用を除外します。</li>
            <li>仮払い金等及び確定した報酬について以下の日数が経過した場合、当該仮払い金等及び確定した報酬にかかるジム及びトレーナーは、仮払い金等にかかる返還請求権、確定した報酬の支払請求権、その他一切の権利を失い、当該仮払い金等及び確定した報酬は弊社に帰属するものとします。
                <ol class="parentheses-list">
                    <li>本条第7項各号に該当した日から、仮払い金等が返金されないまま180日が経過した場合</li>
                    <li>報酬が確定した日から、出金されないまま180日が経過した場合</li>
                </ol>
            </li>
        </ol>
        <div class="article-title">第8条（業務委託に関する法令の遵守）</div>
        <div>会員は、本サービスにおける会員間の取引において、以下の法律上の規定その他業務委託に関する法律を遵守します。</div>
        <ol class="parentheses-list">
            <li>本取引によってトレーナーに支払われる報酬について、ジムが源泉徴収をする義務があるときは、ジムは源泉徴収税の納付 、支払調書の交付等の義務を履行するものとします。</li>
            <li>本取引が、下請代金支払遅延等防止法の対象となるときは、親事業者となるトレーナーは、同法を遵守するものとします。</li>
        </ol>
        <div class="article-title">第9条（ID・パスワードの管理）</div>
        <ol class="paragraph-list">
            <li>会員は、登録したID及びパスワードについて、自己の責任の下で適切に管理し、ID及びパスワードの盗用を防止する措置を自ら講じるものとします。</li>
            <li>会員は、登録したID及びパスワードについて、第三者による利用や第三者への貸与・譲渡等の行為を行ってはならないものとします。</li>
            <li>ID及びパスワードの管理不十分、使用上の過誤、第三者の使用等により被った損害は会員が責任を負うものとし、弊社はかかる会員の損害から一切免責されるものとします。</li>
            <li>会員は、ID及びパスワードの盗用や第三者による使用が判明した場合、直ちにその旨を弊社に通知し、弊社からの指示に従うものとします。</li>
        </ol>
        <div class="article-title">第10条（秘密情報の取り扱い）</div>
        <ol class="paragraph-list">
            <li>利用者は、本サービスを通じて会員間で連絡を取り合う場合及び弊社から会員に対して連絡を行う場合 、相手方から開示された情報については、秘密として保持し、事前に当該相手方の書面による承諾を得ることなく、第三者への開示又は漏洩をしてはならず、また、本サービスの利用及び本サービスに基づき成立した業務委託委託契約の履行の目的以外で使用しないものとします。</li>
            <li>次の各号に定める情報は、秘密情報から除外します。
                <ol class="parentheses-list">
                    <li>開示者から開示を受ける前に、被開示者が正当に保有していたことを証明できる情報。</li>
                    <li>開示者から開示を受ける前に、公知となっていた情報。</li>
                    <li>開示者から開示を受けた後に、被開示者の責に帰すべからざる事由により公知となった情報。</li>
                    <li>被開示者が、正当な権限を有する第三者から秘密保持義務を負うことなく正当に入手した情報。</li>
                    <li>被開示者が、開示された情報によらず独自に開発した情報。</li>
                </ol>
            </li>
            <li>利用者が本条第１項の規定に違反したことにより会員その他の第三者との間で紛争が生じたとしても、弊社は一切の責任を負わないものとし、利用者の責任と費用でこれを解決するものとします。</li>
        </ol>
        <div class="article-title">第11条（禁止事項）</div>
        <div>本サービスの利用者が、以下に定める行為を行うことを禁止します。</div>
        <ol class="parentheses-list">
            <li>弊社、他の利用者若しくは第三者の著作権、商標権等の知的財産権を侵害する行為、又は侵害するおそれのある行為。</li>
            <li>他の利用者若しくは第三者の財産、プライバシー若しくは肖像権を侵害する行為、又は侵害するおそれのある行為。</li>
            <li>特定個人の氏名・住所・電話番号・メールアドレスなど第三者が見て個人を特定できる情報を第三者に提供する行為。</li>
            <li>他の利用者若しくは第三者を差別もしくは誹謗中傷し、又は他者の名誉若しくは信用を毀損する行為。</li>
            <li>一人の利用者が複数のメールアドレス等を登録して重複して会員登録を行う行為。</li>
            <li>会員資格を停止ないし無効にされた会員に代わり会員登録をする行為。</li>
            <li>アクセス可能な本サービス又は他者の情報を改ざん、消去する行為。</li>
            <li>弊社又は他者になりすます行為（詐称するためにメールヘッダ等の部分に細工を行う行為を含みます。）。</li>
            <li>有害なコンピュータプログラム等を送信し、又は他者が受信可能な状態におく行為。</li>
            <li>他者に対し、無断で、広告・宣伝・勧誘等の電子メール又はメッセージ（以下「電子メール等」といいます。）若しくは嫌悪感を抱く電子メール等そのおそれのある電子メール等を含みます。）を送信する行為。他者の電子メール等の受信を妨害する行為。連鎖的な電子メール等の転送を依頼する行為及び当該依頼に応じて転送する行為。</li>
            <li>他者の設備若しくは本サービス用設備（弊社が本サービスを提供するために用意する通信設備、電子計算機、その他の機器及びソフトウェアを言い、以下同様とします。）に無権限でアクセスし、又はポートスキャン、DOS攻撃若しくは大量のメール送信等により、その利用若しくは運営に支障を与える行為、又は支障を与えるおそれのある行為。</li>
            <li>サーバ等のアクセス制御機能を解除又は回避するための情報、機器、ソフトウェア等を流通させる行為。</li>
            <li>本人の同意を得ることなく、又は詐欺的な手段（いわゆるフィッシング及びこれに類する手段を含みます。）により他者の会員登録情報を取得する行為。</li>
            <li>弊社が事前に書面をもって承認した場合を除く、本サービスに基づく業務委託以外を目的とした本サービスを使用した営業活動、本サービスに基づく業務委託以外の営利活動を目的とした本サービスの利用、又はその準備を目的とした本サービスの利用 。</li>
            <li>トレーナーの承諾の有無にかかわらず、委託された業務の内容に照らして、報酬額が著しく低いと弊社が判断する金額で業務を依頼する行為、または業務を開始する行為。</li>
            <li>報酬確定前に商品・サービス等の購入が必要な業務を依頼する行為、または業務を開始する行為。</li>
        </ol>
        <div class="article-title">第12条（監視業務）</div>
        <div>弊社は、利用者が本サービスを適正に利用しているかどうかを監視する業務を弊社の裁量により行うものとし、利用者はそれに同意するものとします。</div>
        <div class="article-title">第13条（規約違反への対処及び違約金等）</div>
        <ol class="paragraph-list">
            <li>弊社は、利用者の行為が本利用規約に反すると判断した場合に、弊社の判断により、当該利用者に何ら通知することなくして、本サービスの一時停止、会員登録の解除、本サービスへのアクセスを拒否、本サイト上におけるプロフィール等の掲載情報や電子掲示板への投稿の全部若しくは一部の削除、変更又は公開範囲の制限等の必要な措置をとることができるものとします。</li>
            <li>前項に基づく弊社の対処に関する質問、苦情は一切受け付けておりません。なお、利用者は、当該措置によって被った一切の損害について、弊社に対して賠償請求を行わないものとします。</li>
            <li>弊社は、利用者が本利用規約違反等の悪質な行為を行っていると判断した場合、当該利用者に対して法的措置を検討するものとします。</li>
            <li>利用者は、利用者が本利用規約違反等の行為を行ったことにより弊社に損害（第三者に損害が生じ、その損害について弊社が填補した場合を含む）が生じた場合、その一切の損害について、弊社に対して賠償する責任を負うものとします。</li>
            <li>利用者は、利用者が第５条第１６項又は第７条第６項に違反した場合、違約金として、当該取引の報酬額に対するシステム利用料相当額か金１００万円のいずれか大きい方の金額（当該取引の報酬額に対するシステム利用料相当額の算定が不可能な場合は、金１００万円）を弊社に支払うものとします。</li>
        </ol>
        <div class="article-title">第14条（弊社からの連絡又は通知）</div>
        <ol class="paragraph-list">
            <li>弊社が会員への連絡又は通知の必要がある場合には、登録されたメールアドレス宛にメールするか、登録された住所宛に郵送することによって、連絡又は通知を行います。</li>
            <li>利用者は、原則としてメール又はお問い合わせフォームより弊社への連絡を行うものとします。電話による連絡及び来訪は受け付けておりません。</li>
        </ol>
        <div class="article-title">第15条（サイトの中断・停止・終了）</div>
        <ol class="paragraph-list">
            <li>弊社は、システム障害及び保守、停電や火災などの天変地異、その他技術上・運営上の理由により、本サービスの提供が困難であると判断した場合、利用者への事前通知を行わず、本サービスの中断を行う場合があります。</li>
            <li>弊社は2週間前までに、会員に電子メールでの通知及び本サービスの提供を行うWebサイト上で告知を行うことにより、本サービスの停止及び終了を行うことができるものとします。</li>
            <li>弊社は、本条に基づき弊社が行った措置に基づき利用者に生じた損害について一切の責任を負いません。</li>
        </ol>
        <div class="article-title">第16条（免責）</div>
        <ol class="paragraph-list">
            <li>会員登録取消し、利用者からのID・パスワードの第三者に漏洩、利用者による秘密漏示、本サービスのシステム不具合や障害・中断やデータの消失・漏洩等により生じた不利益・損害等、本サービスの利用により利用者に生じた一切の不利益・損害について弊社は一切の責任を負いません。</li>
            <li>利用者が、本サービスを利用することにより、他の利用者又は第三者に対し不利益・損害を与えた場合、利用者は自己の費用と責任においてこれを賠償するものとし、これらの一切の不利益・損害について弊社は一切責任を負いません。</li>
            <li>弊社は本サービス上で行われるジム及びトレーナー間の取引を管理するものではなく、取引によって生じた一切の不利益・損害について一切責任を負いません。</li>
            <li>本サービス上でやりとりされるメッセージや送受信されるファイルに個人情報等が含まれていた場合、それによって会員が被った不利益・損害について、弊社は一切責任を負いません。</li>
            <li>弊社は、会員の身元の保証をするものではなく、またジム及びトレーナーが本サービス上で取引を完了することを保証するものでもありません。</li>
        </ol>
        <div class="article-title">第17条（本サービスの譲渡等）</div>
        <div>弊社は、本サービスの事業を第三者に譲渡した場合、当該事業譲渡に伴い、本サービスの運営者たる地位、本利用規約上の地位、本利用規約に基づく権利及び義務並びに会員の登録情報及びその他情報を当該事業譲渡の譲受人に譲渡することができるものとし、本サービスの会員は、会員たる地位、本規約上の地位、本利用規約に基づく権利及び義務並びに会員の登録情報その他情報の譲渡につきあらかじめ同意するものとします。</div>
        <div class="article-title">第18条（反社会的勢力の排除）</div>
        <ol class="paragraph-list">
            <li>弊社及び利用者は、相手方に対し、当該利用者による本サービスの利用開始時点において、自己及び自己の取締役、執行役、執行役員等の経営に実質的に関与する重要な使用人、実質的に経営権を有する者が反社会的勢力に該当しないことを表明し、かつ当該利用者による本サービスの利用期間中該当しないことを保証するものとします。なお、本条において「反社会的勢力」とは、暴力団員による不当な行為の防止等に関する法律（以下「暴対法」といいます。）第２条第２号に定義される暴力団、暴対法第２条第６号に定義される暴力団員、暴力団員でなくなった日から５年を経過しない者、暴力団準構成員、暴力団関係企業、総会屋、社会運動標榜ゴロ、政治活動標榜ゴロ、特殊知能暴力集団、暴力団密接関係者及びその他の暴力的な要求行為若しくは法的な責任を超えた不当要求を行う集団又は個人をいうものとします。</li>
            <li>弊社及び利用者は、本サービスの利用に関連して自ら又は第三者を利用して以下の各号に該当する行為を行わないことを、相手方に対し、保証するものとします。
                <ol class="parentheses-list">
                    <li>暴力的な要求行為</li>
                    <li>法的な責任を超えた不当な要求行為</li>
                    <li>脅迫的な言動をし、又は暴力を用いる行為</li>
                    <li>風説を流布し、偽計又は威力を用いて他方当事者の信用を棄損し、又は他方当事者の業務を妨害する行為</li>
                    <li>その他前各号に準ずる行為</li>
                </ol>
            </li>
        </ol>
        <div class="article-title">第19条（基準時間）</div>
        <div>本サービスの提供にあたって基準となる時刻は、全て弊社のサーバ内で管理されている時刻によるものとします。</div>
        <div class="article-title">第20条（準拠法・管轄裁判所）</div>
        <ol class="paragraph-list">
            <li>本利用規約は日本法に基づき解釈されるものとし、本利用規約の一部が無効な場合でも、適用可能な項目については効力があるものとします。</li>
            <li>本サービスに関連して訴訟等の必要が生じた場合には、東京地方裁判所を第一審の専属的合意管轄裁判所とします。</li>
        </ol>
    </div>
    <div class="article-footer">以上</div>
</div>
@endsection
