<div class="content-container-anchor overlay-container-anchor">
    <h2 class="title-anchor">WELCOME TO THE XPERTS TAX</h2>
    <div id="anchor-check-in" class="container">
        <div class="row">
            <?=
            $this->Form->select(
                    'field', [
                'I am a salaried employee, and also invest in mutual funds/stocks/shares',
                'I am a salaried employee, and also a derivatives trader (futures, commodity)',
                'I am self employed, and work independently',
                'I am self employed, and run a sole proprietorship firm',
                'I am an employer having a large number of employees'
                    ], ['empty' => 'I am a salaried employee',
                'onchange' => 'location = "' . $this->Url->build(['controller' => 'services', 'action' => 'incometax']) . '";',]
            );
            ?>
        </div>
    </div>
</div>

<div class="content-container-anchor">
    <h2 class="title-anchor">OUR SERVICES</h2>
    <div class="row">
        <div class="col-md-4 p-3">
            <div class="home-image"><?=
                $this->Html->image("services/incometax.png", [
                    "alt" => "home-image",
                    'url' => ['controller' => 'services', 'action' => 'incometax'],
                    'style' => 'width: 338px;height:236px;'
                ]);
                ?></div>
            <h4><?= $this->Html->link('Income Tax', ['controller' => 'services', 'action' => 'incometax']) ?></h4>
            <p>We specialize in providing Income tax services to individuals, small scale and medium scale businesses which are highly effective and efficient. </p>
            <?= $this->Html->link('More Information', ['controller' => 'services', 'action' => 'incometax'], ['class' => 'button-anchor']) ?>
        </div>
        <div class="col-md-4 p-3">
            <div class="home-image"><?=
                $this->Html->image("services/tds_tcs.jpg", [
                    "alt" => "home-image",
                    'url' => ['controller' => 'services', 'action' => 'tds_tcs'],
                    'style' => 'width: 338px;height:236px;'
                ]);
                ?></div>

            <h4><?= $this->Html->link('TDS TCS', ['controller' => 'services', 'action' => 'tds_tcs']) ?></h4>
            <p>TDS Compliances can really make you stressed, don't worry, let tax experts from Xpert Tax help you on this</p>
            <?= $this->Html->link('More Information', ['controller' => 'services', 'action' => 'tds_tcs'], ['class' => 'button-anchor']) ?>
        </div>
        <div class="col-md-4 p-3">
            <div class="home-image">
                <?=
                $this->Html->image("services/gst.jpg", [
                    "alt" => "home-image",
                    'url' => ['controller' => 'services', 'action' => 'gst'],
                    'style' => 'width: 338px;height:236px;'
                ]);
                ?></div>
            <h4><?= $this->Html->link('GOODS AND SERVICES TAX (GST)', ['controller' => 'services', 'action' => 'gst']) ?></h4>
            <p>Goods and Services tax (GST) has been identified as one of most important tax reform post-independence.  </p>
            <?= $this->Html->link('More Information', ['controller' => 'services', 'action' => 'gst'], ['class' => 'button-anchor']) ?>
        </div>
        <div class="col-md-4 p-3">
            <div class="home-image">
                <?=
                $this->Html->image("services/service_tax.jpg", [
                    "alt" => "home-image",
                    'url' => ['controller' => 'services', 'action' => 'servicetax'],
                    'style' => 'width: 338px;height:236px;'
                ]);
                ?></div>
            <h4><?= $this->Html->link('Service Tax Consultancy', ['controller' => 'services', 'action' => 'servicetax']) ?></h4>
            <p>We have rich experience in offering service tax matters consultancy which are vital in the current scenario. </p>
            <?= $this->Html->link('More Information', ['controller' => 'services', 'action' => 'servicetax'], ['class' => 'button-anchor']) ?>
        </div>
        <div class="col-md-4 p-3">
            <div class="home-image"><?=
                $this->Html->image("services/saletax.png", [
                    "alt" => "home-image",
                    'url' => ['controller' => 'services', 'action' => 'saletax'],
                    'style' => 'width: 338px;height:236px;'
                ]);
                ?></div>
            <h4><?= $this->Html->link('Sales Tax Consultancy', ['controller' => 'services', 'action' => 'saletax']) ?></h4>
            <P>Our clients avail from us sales tax consultancy which has proved highly beneficial for them. We also provide VAT matters consultancy which has become extremely .....</P>
            <?= $this->Html->link('More Information', ['controller' => 'services', 'action' => 'saletax'], ['class' => 'button-anchor']) ?>
        </div>
        <div class="col-md-4 p-3">
            <div class="home-image"><?=
                $this->Html->image("services/accounting.jpg", [
                    "alt" => "home-image",
                    'url' => ['controller' => 'services', 'action' => 'accounting'],
                    'style' => 'width: 338px;height:236px;'
                ]);
                ?></div>
            <h4><?= $this->Html->link('Accounting Services', ['controller' => 'services', 'action' => 'accounting']) ?></h4>
            <P>We offer highly efficient accounting services which are provided by us for our local, national and international clients. We also offer design, implementation and review of accounting manual. </P>
            <?= $this->Html->link('More Information', ['controller' => 'services', 'action' => 'accounting'], ['class' => 'button-anchor']) ?>
        </div>
        <div class="col-md-4 p-3">
            <div class="home-image"><?=
                $this->Html->image("services/company_law.jpg", [
                    "alt" => "home-image",
                    'url' => ['controller' => 'services', 'action' => 'companylaw'],
                    'style' => 'width: 338px;height:236px;'
                ]);
                ?></div>
            <h4><?= $this->Html->link('Company Compliance Consultancy', ['controller' => 'services', 'action' => 'companylaw']) ?></h4>
            <P>Every company according to the India law need to register with the registrar of companies and it is also necessary with documents for various statutory  requirements. </P>
            <?= $this->Html->link('More Information', ['controller' => 'services', 'action' => 'companylaw'], ['class' => 'button-anchor']) ?>
        </div>
        <div class="col-md-4 p-3">
            <div class="home-image"><?=
                $this->Html->image("services/audit.jpg", [
                    "alt" => "home-image",
                    'url' => ['controller' => 'services', 'action' => 'audit'],
                    'style' => 'width: 338px;height:236px;'
                ]);
                ?></div>
            <h4><?= $this->Html->link('Auditing & Assurance Services', ['controller' => 'services', 'action' => 'audit']) ?></h4>
            <P>We are blessed with team of qualified chartered accountants highly efficient in auditing and assurance services. </P>
            <?= $this->Html->link('More Information', ['controller' => 'services', 'action' => 'audit'], ['class' => 'button-anchor']) ?>
        </div>
        <div class="col-md-4 p-3">
            <div class="home-image"><?=
                $this->Html->image("services/hr_solution.jpg", [
                    "alt" => "home-image",
                    'url' => ['controller' => 'services', 'action' => 'hr_solution'],
                    'style' => 'width: 338px;height:236px;'
                ]);
                ?></div>
            <h4><?= $this->Html->link('HR Solution', ['controller' => 'services', 'action' => 'hr_solution']) ?></h4>
            <P>Statutory compliance in HR refers to the legal framework which organizations must abide by with respect to the treatment of their employees. </P>
            <?= $this->Html->link('More Information', ['controller' => 'services', 'action' => 'hr_solution'], ['class' => 'button-anchor']) ?>
        </div>
    </div>
</div>
