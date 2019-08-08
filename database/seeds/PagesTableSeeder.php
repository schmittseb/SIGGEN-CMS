<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::find(1);

        Page::truncate();


            $home = new Page([
                'title' => 'Homepage',
                'url' => 'home',
                'content' => '
                    <p>Welcome to the home page of the Association for Computational Linguistics Special Interest Group on Natural Language Generation. SIGGEN [ˈsɪɡ.ʤɛn] is a special interest group of the Association for Computational Linguistics (ACL). It provides a forum for the discussion, dissemination and archiving of research topics and results in the field of text generation.</p>
                  
                    <h4>What is Natural Language Generation?</h4>
                    <p>Natural language generation (NLG) focuses on algorithms and models for producing texts in English or other natural languages. NLG systems generally produce summaries, explanations, descriptions, etc of non-linguistic data from databases, knowledge bases, sensors, and so forth. Good sources to learn about NLG include:</p>
                    <hr>
                    <ul>
                      <li><a href="https://ehudreiter.com/2018/01/16/learn-about-nlg/"> How do I Learn about NLG?</a></li>
                      <li><a href="https://www.jair.org/index.php/jair/article/view/11173">Survey of the State of the Art in Natural Language Generation</a></li>
                      <li><a href="https://en.wikipedia.org/wiki/Natural-language_generation">Wikipedia article on NLG</a></li>
                    </ul>
                    ',
                'weight' => 1
            ]);
            $events = new Page([
                'title' => 'Events',
                'url' => 'events',
                'content' => '
                  <h4>Upcoming Events</h4>
                  <p>
                    We are glad to announce that <b>INLG 2020 will be held in Dublin (Ireland)</b>.
    
                    More details about INLG2020 are coming soon, but now it is time to think about submissions for <a href="https://www.inlg2019.com/">INLG 2019</a> (submission deadline: <b>1 July 2019</b>)
    
                    Tokyo, Japan, 29 October - 1 November 2019. Follow <a href="https://twitter.com/INLG2019">@INLG2019 </a>on Twitter for up-to-date information and announcements.
                    <br>
                    Other related events are:
                  </p>
                  <ul> 
                    <li><a href="https://naacl2019.org/">NAACL-HLT 2019</a> to be held in Minneapolis, USA, June 2 - 7. With <a href="https://neuralgen.io/">NeuralGen 2019</a> as co-located event.</li>
                    <li><a href="http://www.acl2019.org/EN/index.xhtml">ACL 2019</a> to be held in Florence, Italy, July 28 - August 2</li>
                     <li><a href="https://www.emnlp-ijcnlp2019.org/">EMNLP-IJCNLP 2019 </a> to be held in Hong Kong, China, November 3 - 7. It will include <a href="http://taln.upf.edu/pages/msr2019-ws/">MSR19</a>  among other events.</li>
                  </ul>
                  </p>
                <h4>Past Events</h4>
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          Events 2018
                        </button>
                      </h2>
                    </div>
                
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>
                          <a href="https://inlg2018.uvt.nl/">INLG 2018</a>  was held at Tilburg, Netherlands, 5-8 Novemeber 2018. Conference proceedings are published at <a href="https://aclanthology.info/events/inlg-2018">ACL Anthology</a>. Endorsed events:
                        </p>
                        <ul> 
                          <li><a href="http://www.ccnlg.org/">CC-NLG 2018 </a><a href="https://www.aclweb.org/anthology/volumes/W18-66/">(Workshop Proceedings)</a></li>
                          <li><a href="https://sites.google.com/view/2is-nlg2018">2IS&NLG 2018 </a><a href="https://www.aclweb.org/anthology/volumes/W18-67/">(Workshop Proceedings)</a></li>
                          <li><a href="https://hbuschme.github.io/nlg-hri-workshop-2018/organisation/">NLG4HRI 2018 </a><a href="https://www.aclweb.org/anthology/volumes/W18-69/">(Workshop Proceedings)</a></li>
                          <li><a href="https://www.ida.liu.se/~evere22/ATA-18/">Automatic Text Adaption ATA 2018 </a><a href="https://www.aclweb.org/anthology/volumes/W18-70/">(Workshop Proceedings)</a></li>
                        </ul>  
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Events 2017
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>
                          <a href="https://eventos.citius.usc.es/inlg2017/index">INLG 2017</a> was held at Santiago de Compostela, Spain, 4-7 September 2017. Conference proceedings are published at <a href="https://aclanthology.info/events/inlg-2017">ACL Anthology</a>. Endorsed events:
                        </p>
                        <ul> 
                          <li><a href="http://www.ccnlg.org/index.php/cc-nlg-2017/">CC-NLG 2017 </a><a href="https://www.aclweb.org/anthology/volumes/W17-39/">(Workshop Proceedings)</a></li>
                          <li><a href="http://www.nooj-association.org/media/k2/attachments/events/LiRANLG.htm#programme">LiRA-NLG 2017 </a><a href="http://www.nooj-association.org/media/k2/attachments/events/LiRANLG.htm#programme">(Workshop Proceedings)</a></li>
                          <li><a href="https://sites.google.com/site/workshoprst2017/schedule">RST 2017 </a><a href="https://www.aclweb.org/anthology/volumes/W17-36/">(Workshop Proceedings)</a></li>
                          <li><a href="http://xci2017.arg.tech/index.php/schedule/">XCI 2017 </a><a href="https://www.aclweb.org/anthology/volumes/W17-37/">(Workshop Proceedings)</a></li>
                        </ul>  
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Events 2016
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>
                          <a href="https://eventos.citius.usc.es/inlg2017/index">INLG 2016</a> was held at Edinburgh, UK, 5-8 September 2016. Conference proceedings are published at <a href="https://aclanthology.info/events/inlg-2016">ACL Anthology</a>. Endorsed events:
                        </p>
                        <ul> 
                          <li><a href="webprojects.eecs.qmul.ac.uk/mpurver/ccnlg/">CC-NLG 2016 </a><a href="https://www.aclweb.org/anthology/volumes/W16-55/">(Workshop Proceedings)</a></li>
                          <li><a href="https://webnlg2016.sciencesconf.org/">WebNLG 2016 </a><a href="https://webnlg2016.sciencesconf.org/">(Workshop Proceedings)</a></li>
                        </ul>  
                      </div>
                    </div>
                  </div>
                </div>
                ',
                'weight' => 2
            ]);
            $resources = new Page([
                'title' => 'Resources',
                'url' => 'resources',
                'content' => '
                      <p>Under the following links you can find an overview of natural language generation systems, as well as data sets and corpora used for research in natural language generation available for download over the web. Under the last link you can find a list with other NLG research groups.</p>
                      <ul>
                        <li><a href="https://aclweb.org/aclwiki/Downloadable_NLG_systems">Downloadable NLG systems</a></li>
                        <li><a href="https://aclweb.org/aclwiki/Data_sets_for_NLG">Data sets for NLG</a></li>
                        <li><a href="https://aclweb.org/aclwiki/NLG_research_groups">NLG research groups</a></li>
                      </ul>
                ',
                'weight' => 3
            ]);
            $board = new Page([
                'title' => 'Board',
                'url' => 'board',
                'content' => '
                <p>
                The SIGGEN board is made up of the following people:
                </p>
                 <ul>
                   <li>
                     <a href="https://ehudreiter.com/">Ehud Reiter</a> <a href="mailto:e.reiter@abdn.ac.uk">(mail)</a> <a href="https://www.abdn.ac.uk/ncs/profiles/e.reiter/">Professor/Chair in Computer Science at University of Aberdeen</a>
                     and also Chief Scientist of <a href="https://www.arria.com/">Arria NLG</a>. ( <a href="mailto:siggen-chair(ta)aclweb(dot)org">chair</a>)
                     elected in December 2018 for the period from 1st January 2019 to 31st December 2022.
                   </li>
                   <li>
                     <a href="https://dimitragkatzia.wordpress.com/">Dimitra Gkatzia</a> <a href="mailto:d.gkatzia@napier.ac.uk">(mail)</a> <a href="https://www.napier.ac.uk/about-us/our-schools/school-of-computing/staff">School of Computing, Edinburgh Napier University</a> , Edinburgh.
                     elected in December 2016 for the period from 1st January 2017 to 31st December 2020.
                   </li>
                   <li>
                     <a href="http://amandastent.com/joomla30/">Amanda Stent</a> <a href="mailto:amanda.stent@gmail.com">(mail)</a> Bloomberg LP <a href="mailto:siggen-treasurer@aclweb.org">(treasurer)</a> elected in December 2016 for the period from 1st January 2017 to 31st December 2020.
                   </li>
                   <li>
                     <a href="https://citius.usc.es/equipo/investigadores-postdoutorais/jose-maria-alonso-moral">Jose M. Alonso</a> <a href="mailto:josemaria.alonso.moral@usc.es">(mail)</a> <a href="">University of Santiago de Compostela</a>, Spain (secretary)
                     elected in December 2018 for the period from 1st January 2019 to 31st December 2022.
                   </li>
                   <li>
                     <a href="https://www.edinburgh-robotics.org/students/amanda-cercas-curry">Amanda Curry</a> <a href="mailto:ac293@hw.ac.uk">(mail)</a> <a href="https://www.hw.ac.uk/">School of Mathematical and Computer Sciences, Heriot-Watt University</a> (student member) elected in December 2018 for the period from 1st January 2019 to 31st December 2020.
                   </li>
                  </ul>
                  <p>
                    To contact the entire board, please use the email alias: <a href="mailto:siggen-board@aclweb.org">siggen-board@aclweb.org</a>.
                  </p>
                ',
                'weight' => 4
            ]);
            $publications = new Page([
                'title' => 'Publications',
                'url' => 'publications',
                'content' => '
                <p>
                   The publications of the Siggen board can be found on the ACL website: <a href="https://aclweb.org/anthology/sigs/siggen/">LINK</a>
                 </p>
                ',
                'weight' => 5
            ]);
            $mailinglist = new Page([
                'title' => 'Mailing list',
                'url' => 'mailing-list',
                'content' => '
                <h4>Joining the mailing list </h4>
                  <p>
                    The SIGGEN mailing list is currently going through a transition.
                    To sign up, view preferences, change preferences, or unsubscribe, go to:
                    <a href="http://www.jiscmail.ac.uk/SIGGEN">www.jiscmail.ac.uk/SIGGEN</a>.<br>
                    If there are any issues, e-mail: 
                    <a href="mailto:siggen-webmaster@aclweb.org">siggen-webmaster@aclweb.org</a>.
                  </p>
                  <h4>Posting messages to the mailing list</h4>
                  <p>
                    Please join the mailing list first (see above). Then you may use the email alias <a href="mailto:siggen-list@aclweb.org">siggen-list@aclweb.org</a> to post e-mails to the list.
                  </p>
                ',
                'weight' => 6
            ]);

            $admin->pages()->saveMany([
                $home, $events, $resources, $board, $publications, $mailinglist
            ]);

            //$about->appendNode($faq);
    }
}
