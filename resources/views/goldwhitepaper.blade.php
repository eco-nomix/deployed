@extends('layouts.golddefault')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Eco-Coin White Paper</div>
                <div class="panel-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button style="float:right" onclick="location.href='/gold/whitepaper/download'">Download PDF</button>

                        <div class="form-group col-md-12">
                        <h1>Money for the World in a Digital Age</h1>
                        </div>
                        <div class="form-group col-md-12 ">
                            <h2>DISCLAIMER</h2>
                        </div>
                        <div class="form-group col-md-12 ">
                            This is document is being issued by Digital Gold Trust (the "company") and is being provided
                            for informational purposes only.  No information set out or referred to in this document
                            shall form the basis of any contract.
                        </div>
                        <div class="form-group col-md-12 ">
                            The information contained within this white paper is confidential and is being supplied to you
                            solely for your information and may not be reproduced or distributed to any other person or
                            published, in whole or in part, for any purpose. No reliance may be placed for any purpose
                            whatsoever on the information contained in this white paper. No representation or warranty,
                            express or implied, is given by or on behalf of the Company or its respective shareholders,
                            directors, officers or employees or any other person as to the accuracy or completeness of
                            the information or opinions (including in the case of negligence, but excluding and liability
                            for fraud) contained in this white paper. All opinions and estimates contained in this
                            information are subject to change without notice and are provided in good faith but without
                            legal responsibility.

                        </div>
                        <div class="form-group col-md-12 ">
                            This white paper contains forward-looking statements, which relate to the Company's proposed
                            strategy, plans and objectives. Such forward-looking statements involve known and unknown
                            risks, uncertainties and other important factors beyond the control of the company that
                            could cause the actual performance or achievements of the Company to be materially different
                            from such forward-looking statements. Accordingly, you should not rely on any forward-looking
                            statements and the company accepts no obligation to disseminate any updates or revisions to
                            such statements. Any individual who is in doubt about the investment to which this white paper
                            relates should consult an authorized person specializing in advising on investments referred
                            to in this white paper. Any investment, investment activity or controlled activity to which
                            this white paper relates is available only to Relevant Persons and will be engaged only with
                            such Relevant persons. Personal of any other description, including those that do not have
                            professional experience in matters relating to investments, should not rely or act upon the
                            information contained within this white paper.
                        </div>
                        <div class="form-group col-md-11 ">
                            The transactions referred to in this white paper may not be suitable for every investor
                            and any offering may be restricted to those investors that meet certain criteria imposed
                            by applicable law or regulation. Transactions of the type described herein may involve a
                            high degree of risk and the value of such investments may be highly volatile. Such risks
                            may include without limitation risk of adverse or unanticipated market developments, risk
                            of issues defaults and risk of liquidity. In certain transactions counter-parties may lose
                            their entire investment or incur an unlimited loss. This paper does not purport to identify
                            or suggest all the risks (directly or indirectly) and other significant aspects in connection
                            with transaction of the type described herein, and counter-parties should ensure that they
                            fully understand the terms of the transaction, including the relevant risk factors and any
                            legal, tax, regulatory or accounting considerations applicable to them, prior to transacting.
                            XYZ limited expressly disclaims any advisory, fiduciary or similar relationship with the recipient.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h1>Company Information</h1>
                        </div>

                        <div class="form-group col-md-12 ">
                            Digital Gold Trust is a Nevis Business Trust established in 2018 under company registration number 1112223333 and is registered as a Financial Designated Business with
                            the Financial Services Authority (FSA) of Nevis.
                        </div>
                        <div class="form-group col-md-12 ">

                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold and Digital Gold Coin are trademarks of Digital Gold Trust.
                        </div>
                        <div class="form-group col-md-12 ">
                            Registered Address:  <br>
                            123 lsdkf
                            lsdfkj,  Switzerland
                            11223333
                        </div>
                        <div class="form-group col-md-12 ">
                            Contact Numbers:  <br><br>
                            Europe:<br>
                                Basil, Switzerland:  Head Office   +42 32 334433<br><br>
                            Asia & Austrailia:<br>
                                Hong Kong: +852 47 333227<br>
                                Brisbane (Australia): +61 27 34545<br><br>
                            Middle East:  <br>
                                Dubia:  +973 11 234434<br><br>
                            USA: <br>
                               Nevada:  +1 222-333-4444<br> <br>

                            Email:<br>
                               General:  info@eco-coin.com<br>
                               Support:  help@eco-coin.com<br> <br>
                            Websites:<br>
                               Corporate Website:  https://eco-coin.com<br>
                               Web Client Application:  Https://app.eco-coin.io<br>


                        </div>
                        <div class="form-group col-md-12 ">
                            <H1>Introduction</H1>
                        </div>
                         <div class="form-group col-md-12 ">
                             The core innovation behind Bitcoin is its decentralized structure. Unlike traditional
                             fiat currencies, Bitcoin has no central control, no central repository of information,
                             no central management, and no central point of failure. However, one of the challenges
                             facing Bitcoin is that most of the actual e-services and e-businesses built around the
                             Bitcoin ecosystem are centralized. Due to the centralized nature of the current system,
                             e-commerce is ran by individuals in specific locations that utilize vulnerable computer
                             systems, that are susceptible to legal entanglements. Digital Gold is one of the truly
                             decentralized currencies available today due to its standing commitment to building off
                             of the core fundamentals of Bitcoin, while bringing an entirely new layer of anonymity
                             to realization.
                        </div>
                        <div class="form-group col-md-12">
                            Digital Gold is the digital monetary system the world has been waiting for; simple to
                            understand, high security, international access, and a value pegged to vaulted and insured
                            gold.
                        </div>
                        <div class="form-group col-md-12 ">
                            The Digital Gold Coin is a title of ownership in digital form, backed by gold and other
                            commodities and created through the act of converting a fixed weight of physical precious metals
                            where the title of ownership is recorded on the Blockchain. The amount of gold per Digital Gold
                            Coin, hence the value of the Digital Gold Coin is fixed at the ratio of 1/1000 oz of gold per
                            issued coin. Digital Gold Coins are traded directly from within a unique eWallet System using
                            live price-feeds for buy or sell operations as well as enabling the transfer of coins between
                            accounts. Digital Gold Coins can also be bought by and sold for fiat currencies and can be redeemed
                            in physical metal.
                        </div>
                        <div class="form-group col-md-12 ">
                            Each transaction of Digital Gold is levied a small transaction fee. This fee is shared with parties
                            involved with the creation of the Digital Gold Coins and merchants. Coin creation starts within the
                            primary market where investors purchase wholesale contracts of physical gold or other recognized
                            commodities which are then converted into digital ownership titles called Digital Gold Coins.
                            These eligible investors also receive a generous share of the transfer fee on all subsequent
                            transactions that take place in the secondary market on the coins that they help to create.
                            These fees will continue with each transaction for the life of the coin. This conversion creates
                            an additional supply of money base (Digital Gold Coins) and takes place on a wholesale physical
                            trading platform where the metals are securely allocated, segregated, vaulted and insured. The
                            digital title of the Digital Gold Coin is then incentivised to be sold on the secondary market
                            platform via blockchain technology which will generate long-term income to the investors.

                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold's money base becomes available for buying and selling on the secondary market platform
                            via blockchain technology to individuals and businesses whether directly from within their unique
                            eWallet or through third party distributors.
                        </div>
                        <div class="form-group col-md-12 ">
                            Agents for Eco-Coin are further incentivised to recruit and enroll new Eco-Coin wallet users and receive both a share of initial creation of Eco-Coins and a portion of all future transfer fees associated with those coins.  There is no limitation as to how many individuals an agent may recruit.  Earning are communicated via through app notifications.
                        </div>
                        <div class="form-group col-md-12 ">
                            Merchants are enrolled by Agents of Eco-Coin.  Merchants are not charged any transaction costs for purchases made from them.  This can represent a 2-3% savings over the acceptance of a standard Visa/Mastercard transaction.
                            Merchants are encouraged to pass some of that savings to the purchasers of their products in the form of a reduction of the retail price.  This will encourage purchases to select them over other merchants.
                        </div>
                        <div class="form-group col-md-12 ">
                            Agents for Digital Gold are further incentivised to recruit and enroll new Digital Gold wallet users
                            and receive both a share of initial creation of Digital Gold Coins and a portion of all future transfer
                            fees associated with those coins. There is no limitation as to how many individuals an agent may
                            recruit. Earning are communicated via through app notifications.
                        </div>
                        <div class="form-group col-md-12 ">
                            Merchants are enrolled by Agents of Digital Gold. Merchants are not charged any transaction costs
                            for purchases made from them. This can represent a 2-3% savings over the acceptance of a standard
                            Visa/MasterCard transaction. Merchants are encouraged to pass some of that savings to the purchasers
                            of their products in the form of a reduction of the retail price. This will encourage purchasers to
                            select them over other merchants. Merchants also receive a portion of transactions fees for products
                            they sell through Digital Gold.
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold is thus engineered to be a win-win ecosystem of shared-wealth for all participants.
                            It highly incentivises adoption and the propensity for transactions. The higher the volume of
                            transactions, the higher the velocity Digital Gold money reflects; the higher earnings payout to
                            eligible participants. Entities are thus incentivised to convert, trade, promote and recruit, making
                            Digital Gold a unique monetary architecture built upon solid low volatility gold backing. Digital
                            Gold transactions require no tradition banking systems, and are designed for transfer executions
                            and confirmation to occur within approximately 4 seconds. Digital Gold is honest money resilient
                            to debasement and manipulation. It also returns stable financial sovereignty to individuals and
                            businesses. By it's 100% backing by Insured gold holdings, Digital Gold Coins value will track the
                            physical spot price of gold itself. This allows for holdings to automatically benefit from the
                            increased value of gold when compared to a fiat monetary instrument which has no physical backing
                            and is easily biased by printing presses.
                        </div>

                        <br><br>
                        <div class="form-group col-md-12 ">
                        <h1>Executive Summary</h1>
                        </div>
                        <div class="form-group col-md-12 ">
                            XYZ Limited is launching a revolutionary digital asset called  Digital Gold (Digital Gold.com).  The ability to bring back the
                            Gold Standard was seen as an urgency to solve a few key inherent problems with physically allocated precious metals and the need to:
                            <li>provide a more liquid solution to transfer gold titles instantaneously,</li>
                            <li>bypass slow and uncompromising traditional banking,</li>
                            <li>create gold income generating assets for individuals, companies and institutions,</li>
                            <li>move away from ETF's that are often used to suppress gold prices.</li>
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold is launched as a perfectly engineered money solution to bring big change to the
                            gold industry. Digital Gold is the antidote to monetary debasement inherent to all fiat money
                            systems which create both inflation and deflation via the manipulation of interest rates and
                            the money base (expansion / contraction). Digital Gold is independent from the backing of
                            government entities or central banks.  Digital Gold money is high attractive and modeled in
                            unique ways since it is a:
                            <li>real product launch (no ICO involved),</li>
                            <li>100% asset backed,</li>
                            <li>Not volatile,</li>
                            <li>high propensity to trade (money velocity),</li>
                            <li>exchangeable with fiat currency or redeemable in physical bars and coins,</li>
                            <li>coin creation takes place only with the deposit and insurance of precious metal, </li>
                            <li>economically viable for institutions, individuals and merchants,</li>
                            <li>full featured buy/sell and price discovery exchange built into software (smartphone, table, webClient),</li>
                            <li>earnings and incentives built in at the block-chain level,</li>
                            <li>Digital Gold Coin creation and circulation is preferable to fiat for all participants.</li>
                            <li>The 'Last' participant has the same benefits as the 'First'.</li>
                        </div>
                        <div class="form-group col-md-12 ">
                            A major revolution is taking place with the advent of Blockchain technology and the virtual currencies
                            like Bitcoin, Ethereum, Ripple, etc. driving an almost geometric market growth.  Barring a few
                            exceptions, these crypto-currencies are not asset-backed digital assets and therefore, can
                            experience huge price volatility.  This has been dramatically shown by both the fast rise and
                            fall of most of these currencies that have no intrinsic value.  Because of low velocity, the are
                            driven almost entirely by speculation.
                        </div>
                        <div class="form-group col-md-12 ">
                            Today's financial world is filled with major risks; political, economic and societal. Digital Gold
                             was introduced to diminish risk exposure for individuals and institutions by creating a gold
                             backed medium of exchange which focuses on liquidity, trade, exchangeability, independence
                             plus a long term yield.
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold sets out to unite the precious metals industry with the digital asset market, but
                            also represent a novelty for the financial markets. It is a digital asset which solves the
                            historic problem of how gold can generate an uninterrupted yield for eligible participants.
                            For the first time, Gold is comparable to other investment choices, while retaining their safe
                            haven status and uniquely still being able to act as true money. This is the return to the gold
                            standard through decentralization.div>
                        <div class="form-group col-md-12 ">
                            Digital Gold is an asset backed medium of exchange with intrinsic value and limited volatility.
                            Each unit can be seen as a title of ownership that is easily purchased, exchanged or traded.
                            Each Digital Gold Coin is backed by vaulted, insured, physical metal at a fixed weight. As the
                            price of Gold changes, the price of the Digital Gold immediately changes. The settlement value
                            at all times is designed to maintain 1 Digital Gold Coin to 1/1000 oz of Gold.
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold Coins are not "mined" into existence like most crypto-currencies. They are converted
                            into existence by anyone, by transferring physical Gold into the insured vaulting facilities of
                            Digital Gold by anyone with access to the physical trading platform.
                        </div>
                        <div class="form-group col-md-12 ">
                            No Digital Gold Coins are "reserved" for developers, stock-holders, etc. Digital Gold Coins
                            are only created with an appropriate physical deposit within an insured value, assuring that
                            there is 100% backing at any moment.  This applies to every coin holder.
                        </div>
                        <div class="form-group col-md-12 ">
                        <h1>Digital Gold's Mission</h1>
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold's mission is to become the world's leading honest digital Money, 100% backed by
                            vaulted precious metal and fully insured, for any sized account. This means that the Digital
                            Gold Coin is fully exchangeable with other fiat and alternative currencies, transferable across
                            borders, while at the same time providing a significant earnings potential.
                        </div>
                        <div class="form-group col-md-12 ">
                            The digital portability of Digital Gold empowers the user and provides full financial control,
                            privacy and transparency. Digital Gold is immune to traditional banking problems and counter-party
                             risks and has epic disruptive potential.
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold aims to become a pre-eminent digital and major world asset. It is  perfectly engineered
                            money. It incentivises trade and generates a return for eligible participants: institutions,
                            individuals and merchants, who contribute to Digital Gold's dissemination.
                        </div>
                        <div class="form-group col-md-12 ">
                            It restores freedoms and safety no other mediums of exchange have. Manipulation free, debasement proof,
                            transparent, portable, exchangeable, private and limits external interference. It is the perfect hedge
                            against external political and economic shocks. Based upon blockchain technology Digital Gold aims
                            to re-establish Gold as money and provide diversification from fiat currencies and an obsolete banking
                            system.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h1>Gold with a Yield</h1>
                        </div>
                        <div class="form-group col-md-12 ">
                            Historically Gold is one of the best stores of value, however, it is perceived by the financial industry to have
                            a monumental weakness namely that they produce no yield (income return) and are thus priced and treated as commodities.
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold solves this problem without compromising its asset backing. Pension Funds and Institutions
                            for the first time will be able to invest in Gold and receive a yield without compromising the asset base.
                            Digital Gold allows a reserve currency surrogate for fiat currencies which by their nature are being
                            typically devalued.</div>
                        <div class="form-group col-md-12 ">
                            <h1>Problem with Fiat Currencies - The Need for Honest Money</h1>
                        </div>
                        <div class="form-group col-md-12 ">
                            Fiat money is a currency enforced as legal tender by government decree that differs significantly
                            from physical gold money since it is open to supply and contraction manipulations. Fiat currency is
                            issued as debt by central and member banks. i.e. a government, institution or individual takes a loan
                            (IOU) from banks at interest, but the interest amount to pay back the debt is never created, forcing
                            the financial system to perpetually search for ways to extract “growth” to pay back the interest, and
                            because of this the current monetary system is in continuous imbalance, with unsustainable deficit
                            spending, exploitation and bankruptcies.
                        </div>
                        <div class="form-group col-md-12 ">
                            A new loan is created through an accounting entry as a new bank deposit and on the other side an
                            accounting entry is made for the debt, so when the debt is repaid, the currency is extinguished. Fiat
                            currencies are promissory notes and have no intrinsic asset value.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h1>Thus Money and Debt are equivalent</h1>
                        </div>
                        <div class="form-group col-md-12 ">
                            It is two sides of the same coin. When fiat currency is printed, debt is issued; when debt is paid-off,
                            currency is destroyed. If all the debt today were repaid, there would be no currency left.
                            By definition, the increase in fiat money supply creates price inflation of goods and services due to
                            the value devaluation of the currency itself and a contraction creates deflation. Both are harmful
                            since they rob from savers and destroy wealth. The world´s debts, therefore, can never be paid off by
                            definition and balancing government budgets or eliminating deficits is therefore an impossibility.
                        </div>
                        <div class="form-group col-md-12 ">
                            Fiat currencies lose purchasing power (wealth shrinking) over time like a leaking bag of water. The
                            global debt based fractional financial system model is an extractive “Ponzi” scheme, abusive,
                            destructive and unethical in nature - mathematically doomed to fail. The current financial system
                            prefers to compare exchange rates with other fiat currencies. This is because they are all “leaking
                            bags of water” and are all losing value through devaluation. Physical gold however, is a
                            stable benchmark that cannot be debased. Therefore ongoing price suppression practice by banks
                            and central banks take place through paper certificates manipulation which can be printed “out of
                            thin air” to ensure gold cannot be used as a benchmark to reflect how much purchasing
                            power is being lost by fiat currencies.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h1>The Solution is Digital Gold</h1>
                        </div>
                        <div class="form-group col-md-12 ">
                            Only physical gold can be considered as money since it carries no counterpart risk. It
                            cannot be created “out of thin air” and is not created as debt and generates no inflation. It is
                            the best store of value for over 5,000 years. Physical gold money is honest money, it is
                            debt-free and most importantly, free of interest and is an excellent store of wealth over time. Interest
                            (usury or money earned from the loaning of money) is banned in both Christianity and Islam, making physical gold
                            the only compliant form of money since interest cannot be charged.
                        </div>
                        <div class="form-group col-md-12 ">
                             The era of fiat central banking is in terminal decline, it has brought the global economy into a serious
                             turmoil, and all serious experts are predicting a repeat of 2008 - just much, much worse. Globally,
                             there are less good jobs, more unfunded entitlements, speculation, increased risks, bankruptcies,
                             authoritarianism, loss of freedoms, austerity and wars. High level financial fraud is pervasive and
                             unpunished, invasion of privacy, erosion of free speech and loss of liberty is formed to quell unrest.
                             Bailouts and bail-ins are frequent where losses are socialised and profits are privatised. Individuals
                             no longer feel they have a voice or control over their destiny and financial sovereignty. Banks now
                             impose limitations on transfers, cash withdrawals and charge exorbitant, unjustifiable fees and even
                             negative interest rates. With plans to eliminate cash, all transactions will be forced to go through
                             banks depriving individuals of their financial sovereignty and anonymity. Bank runs will not be
                             permitted and bail-ins and bail-outs will be automated. George Orwell's “1984” vision will be fulfilled.
                        </div>
                        <div class="form-group col-md-12 ">
                            These negative trends have accelerated since the two key events in 2001 and 2008. It is precisely for
                            these reasons that cryptocurrencies since 2009 have increased in popularity to provide safety-nets
                            where individuals can to a degree control their own financial dignity and hedge against market
                            manipulations without interference and freely trade outside of the fiat monetary system.
                        </div>
                        <div class="form-group col-md-12 ">
                            Demand for physical gold and silver is being driven by a flight to safety and lack of trust. Very
                            significant demand is coming from savers. Physical and allocated ownership are preferred to
                            minimise counterpart risk.
                        </div>
                        <div class="form-group col-md-12 ">
                            Yet, savers of physical Gold suffer from the lack of price discovery which is suppressed
                            through the manipulation of speculative “paper certificate” trade and cheap access to central bank
                            fiat credit by large institutions and banks. It is an absurdity that future contracts which rarely end up
                            as physical delivery dictate the physical gold and silver prices. It is truly the equivalent of the tail
                            wagging the dog. The only way to change this trend is for physical gold and silver to offer an
                            attractive yield whilst still offering allocated physical metal backing.
                        </div>
                        <div class="form-group col-md-12 ">
                            This is where the genius of Digital Gold comes into play and it has the architecture to impact physical
                            prices and weaken the influence of paper certificates.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h1>Market Position / Concept</h1>
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold is positioned to be the preeminent asset backed medium of exchange and is
                            poised to be a leading top contender alongside other technologies which all have market
                            capitalization in billions of dollars such as:
                            <OL Type = "a">
                                <li>Bitcoin the original and leading cryptocurrency and specifically promotes decentralised
                                    anonymous transactions. It is not backed by assets and has a huge flaw due to execution
                                    speeds taking hours or days to complete.</li>
                                <li>Ripple targets the banking industry and is built on an early precursor to Digital Gold’s
                                    core system. It has equally fast execution speeds, but is focused solely on speeding up
                                    international bank transactions and is not backed by assets.</li>
                                <li>Ethereum offers the unique ability to program smart contract conditions, which are self-executing
                                    upon reaching milestones, that are built on top of a cryptocurrency architecture. It
                                    has execution speeds of approximately 14 seconds.  Again it is not backed by assets.</li>
                            </OL>
                        </div>
                        <div class="form-group col-md-12 ">
                            <h1>Target Audience of Digital Gold</h1>
                        </div>
                        <div class="form-group col-md-12 ">
                            The key audience can be segmented into the following groups:
                            <OL type = '1'>
                                <li>Coin Creators- institutions, investors</li>
                                <li>Secondary Market - individuals, businesses</li>
                                <li>Secondary Market - merchants</li>
                                <li>Secondary Market - conversion to fiat currency</li>


                            </OL>
                        </div>
                        <div class="form-group col-md-12 ">
                            <h2>Coin Creators</h2>
                            This is an individual, company or institution that purchases gold through the Digital
                            Gold's wholesale physical trading platform. A summary of the transaction is given below:
                            <OL type="A">
                                <li>Spot price of Gold is determined for the fiat currency of to be used</li>
                                <li>wholesale price of Gold is determined.  A 10% discount from spot price</li>
                                <li>Investor determines amount of Gold to be purchased (in fiat currency) </li>
                                <li>Gold is purchased from Digital Gold's wholesale supplier</li>
                                <li>Physical Gold is transferred to Digital Gold's control in a vaulted and insured facility</li>
                                <li>Appropriate amount of Digital Gold for the discounted price is credited to investors account</li>
                                <li>A discount below spot is only possible because of the wholesale contracts established directly with the miners.</li>
                                <li>Because of the 10% discount below spot, The investor has an immediate gain in value over the fiat currency used to purchase the gold.</li>
                            </OL>
                        </div>
                        <div class="form-group col-md-12 ">
                            <h2>Secondary Market - individuals, businesses</h2>
                            This is an individual, company or institution that holds Digital Gold Coins.  They are held in an E-Wallet.  They desire to transfer Digital Gold Coins to another entity.
                            <OL Type="A">
                                <li>Holder determines how much equivalent fiat currency is to be transferred.</li>
                                <li>Spot price of Gold is determined for the fiat currency to be used.</li>
                                <li>Determination if sufficient Digital Gold Coins are in Holders account to do the transfer</li>
                                <li>Digital Gold Coins are transferred to the designated new holder's E-Wallet</li>
                                <li>A 1/2 of 1% transfer fee is applied against the Holder's account</li>
                            </OL>

                        </div>
                        <div class="form-group col-md-12 ">
                            <h2>Secondary Market - merchants</h2>
                            This is an individual, company or institution that holds Digital Gold Coins.  They are held in an E-Wallet.  They desire to transfer Digital Gold Coins to another entity.
                            <OL Type="A">
                                <li>Merchant determines how much equivalent fiat currency is to be transferred.</li>
                                <li>Previously approved merchant discount is applied</li>
                                <li>Spot price of Gold is determined for the fiat currency to be used.</li>
                                <li>Determination if sufficient Digital Gold Coins are in Holders account to do the transfer</li>
                                <li>Digital Gold Coins are transferred to the merchant's E-Wallet</li>
                                <li>A 1/2 of 1% transfer fee is applied against the Holder's account</li>
                            </OL>
                        </div>
                        <div class="form-group col-md-12 ">
                          <h2>Secondary Market - conversion to fiat currency</h2>
                            This is a Holder that wants to convert Digital Gold Coins to a local fiat currency.
                            <OL Type="A">
                                <li>Holder has to have an account in bank that can accept a wire transfer that accepts the desired fiat currency</li>
                                <li>Holder specifies how much equivalent fiat currency is to be transferred.</li>
                                <li>Your account will have limitations on how much can be received.</li>
                                <li>Spot price of Gold is determined for the fiat currency to be used.</li>
                                <li>Determination if sufficient Digital Gold Coins are in Holders account to do the transfer</li>
                                <li>A 10% conversion fee will be applied, this covers the insurance, coinage costs and storage costs</li>
                                <li>Funds are transferred to your local account</li>
                                <li>The Digital Gold Coins will be destroyed for this transaction</li>
                            </OL>
                        </div>

                        <div class="form-group col-md-12 ">
                        </div>

                        <div class="form-group col-md-12 ">
                        <h1>Business Model of Digital Gold</h1>
                         </div>
                        <div class="form-group col-md-12 ">
                        <h2>Definition of Digital Gold Coins</h2>
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold Coins is a tradable digitized form of a warehouse receipt against a deposit of a commodity and is a representaion of title of ownership of underlying physical Asset.
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold Coins is a unit of account that is backed 100% by precious metals.  The value of 1 Digital Gold Coins is established as 1/1000 oz of Gold.
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold Coins's holder has direct sole ownership of the underlying physical assets and granted the option to redeem in bullion bars and coins.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h1>Description of Digital Gold Coins</h1>
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold Coins is a global asset-backed token, with intrinsic value and low volatility, that is carefully created,
                            and freely traded, transferred or exchanged.  Digital Gold Coins represents 1/1000 oz of Gold per coin.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h1> Properties of Digital Gold</h1>
                            <h2>Structure of Digital Gold Coins</h2>
                            XYZ Limited operates a closed physical trading platform for the purchase and sale of physical bullion bars of Gold, and utilizes a
                            private decentralized distributed ledger technology (block-chain) for those who want to receive Digital Gold Coins.
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold Market is comprise of:
                            <ul>
                                <li>Physical Market or the primary market from where Digital Gold Coins is created into existence.</li>
                                <li>Digital Market or the Secondary Market where Digital Gold Coins is circulated - Digital Gold Network.
                                    <ol type = "A">
                                        <li>move between users on a title transfer basis</li>
                                        <li>get exchange with merchats on bartering mechanics, and</li>
                                        <li>be traded between users as buy/sell commercial activity</li>
                                    </ol>
                                </li>
                            </ul>
                            All funds received in the primary markets are classified as pre-payment on-account for all future purchases.
                         </div>
                        <div class="form-group col-md-12 ">
                            <h2>Holding of Physical Assets</h2>
                        </div>
                        <div class="form-group col-md-12 ">
                            Title of underlying physical assets is directly linked to account / ewallet.  All assets are held in the Gold Warehouse as vaulted, insured physical gold.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h2>Withdrawal/ Redemption</h2>
                            Withdrawal of bullion bars from Digital Gold is a logistical process.  The cost of withdrawal includes the warehousing fees, insurance and other fees that were paid to maintain that gold in storage.  The customer instructs the operator via the trading platform to courier the bullion bars from the vault to the customer's
                            registered address.  Cost of the shipment depends on destination and weight.  Delivery is made in either kilogram bars or one-ounce coins.  No transfer of fractional units will be allowed.  All costs and taxes are covered by the customer.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h1>Pricing of Digital Gold Coins</h1>
                            Since new coins are constantly being added into the system tied to the spot price of Gold, then the Digital Gold Coins price will be tied directly to the spot price of Gold.
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold is free of price manipulation where the token market price is consistently tied
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold is priced in US Dollars with its value being 1/1000 oz of spot price of Gold.  The production cost is not reflected in any transaction cost unless the Eco-Coins are being delivered physically or being sold for fiat currency.  Production cost will be determined by current production costs and the number of Digital Gold Coins being converted.

                        </div>
                        <div class="form-group col-md-12 ">
                            <h2>
                            Primary Market
                            </h2>
                           The Digital Gold's wholesale physical trading platform (DGX) is the market where Digital Gold in
                           created. DGX is an online physical trading platform where investors buy and sell eligible gold and
                           convert the gold into Digital Gold digital units. Each conversion makes additional supply of Digital
                           Gold tokens in the Secondary Market of Digital Gold. In other words, investors of DGX bring Digital
                           Gold Coins into existence by converting tangible gold at a fixed conversion rate based upon 1/1000 oz
                           of gold per Digital Gold Coin.</div>
                        <div class="form-group col-md-12 ">
                            <h2>Secondary Market</h2>
                            Digital Gold Network (DGN) is the digital market where Digital Gold is circulated. DGN is an
                            electronic ecosystem accessed via a web-browser, tablet or smartphone that provide end-users
                            with features to trade, transfer or exchange Digital Gold Coins.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h1>General Benefits</h1>
                        </div>
                        <div class="form-group col-md-12 ">
                            <h2> Adopting and benefiting from the Gold Standard</h2>
                        </div>
                        <div class="form-group col-md-12 ">
                           The Gold Standard is a monetary system in which the standard economic unit of account (monetary unit)
                            is based on a fixed weight of gold. Digital Gold Coins follows the Gold standard by establishing
                            a direct link between Digital Gold Coins and Gold by weight. 1 Digital Gold Coin represents the
                            ownership of 1/1000 oz of Gold in a vaulted and insured facility.</div>
                        <div class="form-group col-md-12 ">
                            Digital Gold provides a number of direct benefits for using the Gold Standard.
                            <ul>
                                <li>The creator of the Digital Gold purchases and controls gold for a discounted price.</li>
                                <li>Transactions utilize the full spot price of Gold to establish the current value of the Digital Gold</li>
                                <li>Assuming that the price of Gold doesn't change between the time of creation and usage, the creator would realize an immediate 10% gain in value over a cash only account.</li>
                                <li>If the price of Gold increases, then the value of each Eco-Coin also changes</li>
                                <li>This allows a small investor to benefit from appreciation of the Price of Gold without the costs of physically possessing it (coinage, storage, insurance, and conversion costs</li>
                                <li>Normally a small investor would need to see an approximate 10% increase in the price of Gold to overcome the costs of ownership and insurance. </li>
                                <li>The creator can also earn income from his gold holdings from subsequent transactions, even if the coins are not currently owned by the creator.</li>
                            </ul>
                        </div>
                        <div class="form-group col-md-12 ">
                            Velocity and its benefit to the creator of Digital Gold Coins
                            <ul>
                                <li>A significant portion of the transaction fees are distributed proportionally between the Digital Gold creators</li>
                                <li>This distribution continues even after the 'creator' has transferred them to another account</li>
                                <li>When a creator 'spends' his Digital Gold Coins, the real investment is reduced, reducing his investment exposure but the distribution continues</li>
                                <li>The Digital Gold Coins can be transferred from one party to another many times a month, each time creating a transaction fee</li>
                                <li>The greater the number of transactions that accrue (the higher the velocity), the greater the total distribution to the creator</li>
                                <li>An average of 1 transaction/month will result in approximately a 3% yield per annum.</li>
                                <li>It is estimated that the yield to the Digital Gold creators will average between 3%-12% per annum</li>
                            </ul>

                        </div>
                        <div class="form-group col-md-12 ">
                           <h2>Economic Benefits</h2>
                           Creation of Digital Gold Coins goes into circulation from the Primary Market into the Secondary Market
                           based upon only the value of the gold that the Digital Gold represents. Digital Gold does not have a
                           built-in inflationary effect, it is not issued as debt and therefore, Digital Gold does not earn
                           interest. However holders of Digital Gold can benefit from the following incentives.
                           <ol type = '1'>
                                <li>Digital Gold  creators are given a 10% discount from spot price of Gold for their entire purchase. No cost for production, storage or insurance.</li>
                                <li>The Digital Gold Coins are traded at spot price. No cost for production, storage or insurance.</li>
                                <li>Creators are credited with a distribution based upon velocity, even if they have spent their credits, this distribution can last years beyond their initial investment.</li>
                                <li>Agents receive Digital Gold Coins for referring investors that become Digital Gold Coin Creators.</li>
                                <li>Low Transaction costs</li>
                                <li>Long Term holding appreciate with the price of Gold</li>
                                <li>No debasement of currency</li>
                           </ol>
                           Since Digital Gold wealth sharing mechanism is non-interest bearing, Digital Gold, thus, becomes Sharia Compliant.
                        </div>
                        <div class="form-group col-md-12 ">
                            Digital Gold Coins offers investors a method of investing in Gold and yet obtain substantial returns without putting their Gold at any risk.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h1>Prepaid Digital Gold denominated Card</h1>
                        </div>
                        <div class="form-group col-md-12 ">
                            In order to simplify payments into fiat currencies, Digital Gold end-users have the flexibility to request
                            for a Digital Gold prepaid card denominated in Digital Gold. This is a product where members are not
                            required to sell Digital Gold Coins for fiat currency in order to top-up their prepaid card. This highly
                            convenient prepaid card facility allows members to pay directly in equivalent of Digital Gold at any
                            moment. The prepaid card converts instantly, in real time the represented Gold into any fiat currency to
                            complete the payment transaction. The prepaid card payments are limited only by the balance of Digital Gold
                            on the member's e-wallet.
                            <ol type="1">
                                <li>This is a payment solutions in which pre-paid cards are loaded with Digital Gold and not fiat currency.
                                In most cases, customers are asked to sell their gold, then top-up their prepaid card with the proceeds of
                                the sale in fiat denomination. With Digital Gold this is linked directly to the users account and priced
                                in real time.</li>
                                <li>Liquidity:  users are able to make payment at any card payment points as well a ATM's.  The Digital Gold Coin is converted at spot rate upon payment in to fiat.</li>
                                <li>Pricing:  Users can time usage of their pre-paid card conveniently during times of capital appreciation of Gold</li>
                                <li>Portability/Divisibility:  User can exchange exactly the amount they need to pay.  There is not need to sell large metal amounts for small payments.</li>
                                <li>Merchant Benefit: merchant processing costs of 2-4% are eliminated increasing profits</li>
                                <li>Buyer Benefit:  In many parts of the world the buyer is asked to cover the card charges (2-4%).  With Eco-Coin there is only a .5% transaction fee</li>
                            </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                            <hi>Coin Supply Explained</hi>
                            Digital Gold Coins come into existence through the purchase of Gold from Digital Gold's wholesale physical
                            trading platform (DGX). The physical gold is then vaulted, stored and insured. There is no limit on the
                            number of Digital Gold Coins that can be created (subject to any physical supply-chain logistics issues).
                            Digital Gold does not follow an ICO approach, but adopts a conversion mechanism for issues new digital units.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h1>Comprehensive Storage Solutions</h1>
                            Digital Gold offers a comprehensive storage solution through an approved / outsouced vaulting facility.
                            Our vaulting operators are leading names in the logistics solutions industry who offer
                            secure, efficient and reliable services of the highest quality.  Their modern infrastructure, cutting-edge security systems and comprehensive insurance facilities
                            ensure maximum security and minimum risk for the global storage of bullion bars and coins.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h1>Inspection and Audit</h1>
                            Digital Gold has engaged industry specialists to provide inspection and audit services on bullion bars
                            and coins stored inside vaulting facilities.  The services include weight reconcilliation of all bullion
                            bars and coins stored in each vault location compared to issued Eco-Coins.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h1>Custody Fees</h1>
                            All Digital Gold Coins that are converted to delivered bullion and coins will pay vaulting and insurance costs as though the Gold has been in their possession.  This fee is collected at the time of conversion.
                            The cost of redemption and phsical delivery will be calculated on a case by case depending on weight, final destination and insurance.
                            The redeemer is liable for covering all transportaion costs inclusive any taxes and incidentals without exception.
                            Physical delivery terms and conditions are subject to change without prior notice.
                        </div>
                        <div class="form-group col-md-12 ">
                        Every time a redemption request is executed, the exact number of digital assets in weight is eliminated from circulation.
                        </div>

                        <div class="form-group col-md-12 ">
                            <h2>Cryptography</h2>
                            Digital Gold Network uses industry-standard public-key cryptography tools and techniques,
                            which means the code is well tested and understood. The system is based upon the open
                            source, private and secure Verge block-chain system.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h2>Tor Integration</h2>
                        </div>
                        <div class="form-group col-md-12 ">
                        Tor, derived from an acronym for the original software project name The Onion Router is an IP obfuscation service which enables anonymous communication across a layered circuit based network. Tor directs internet traffic through a free worldwide volunteer overlay network consisting of more than seven thousand relays to conceal a user's location and usage from anyone conducting network surveillance or traffic analysis. The layers of encrypted address information used to anonymize data packets sent through Tor are reminiscent of an onion, hence the name. That way, a data packet's path through the Tor network cannot be fully traced. Tor's use is intended to protect the personal privacy of users, as well as their freedom and ability to conduct confidential communication by keeping their Internet activities from being monitored.
                        </div>
                        <div class="form-group col-md-12 ">
                        Onion routing is implemented by encryption in the application layer of a communication protocol stack, nested like the layers of an onion. Tor encrypts the data, including the next node destination IP, multiple times and sends it through a virtual circuit comprising successive, randomly selected Tor relays. Each relay decrypts only enough of the data packet wrapper to know which relay the data came from, and which relay to send it to next. The relay then rewraps the package in a new wrapper and sends it on. The Final relay decrypts the innermost layer of encryption and sends the original data to its destination without revealing, or even knowing, the source IP address.
                        </div>
                        <div class="form-group col-md-12 ">
                        Because the routing of communication is partly concealed at every hop in the Tor circuit, this method eliminates any single point at which the communicating peers can be determined through network surveillance that relies upon knowing its source and destination.
                        </div>
                        <div class="form-group col-md-12 ">
                            <h2>I2P Integration</h2>
                         </div
                         <div class="form-group col-md-12 ">
                         I2p was originally built to provide hidden services which allow people to host servers at unknown locations. I2p provides many of the same benefits that Tor does. Both allow anonymous access to online content, make use of a P2P-style routing structure, and both operate using layered encryption. However, I2p was designed to be a ?network within the internet,?(see figure 2.1) with traffic staying contained in its borders. I2P performs packet based routing as opposed to Tor's circuit based routing. This provides the benefit of permitting I2p to dynamically route around congestion and service interruptions in a manner similar to the internet's IP routing. This provides a higher level of reliability and redundancy to the network itself.
                         </div>
                         <div class="form-group col-md-12 ">
                         The first time a client wants to contact another client, they make a query against the fully distributed "network database" - a custom structured distributed hash table (DHT) based off the Kademlia algorithm [2]. This is done to find the other client's inbound tunnels efficiently, but subsequent data between them usually includes that information so no further network database lookups are required.
                         </div>
                         <div class="form-group col-md-12 ">
                         I2p is a highly obfuscated tunneling service using ipv6 that anonymizes all Verge data being sent over the network. Each client application has their i2P "router" build several inbound and outbound "tunnels" - a sequence of peers that pass data in one direction (to and from the client, respectively) [2]. In turn, when a client wants to send Verge data to another client, the application passes the message through one of their outbound tunnels targeting one of the other client's inbound tunnels, eventually reaching the destination.
                         </div>
                         <div class="form-group col-md-12 ">
                         Rather than relying on a centralized set of directory servers, like Tor, I2p uses two distributed hash tables to coordinate the state of the network. Distributed hash tables or DHTs are a distributed and often decentralized mechanism for associating hash values with content. The primary advantage to DHT?s are their scalability. A successful decentralized P2P network requires good scalability of its services to ensure the size of content or transaction sharing can continue to grow as required. Additionally I2P does not rely on a trusted directory service to get route information. Instead, network routes are formed and constantly updated dynamically, with each router constantly evaluating other routers. Lastly, I2p establishes two independent simplex tunnels for traffic to traverse the network to and from each host as opposed to Tor?s formation of a single duplex circuit.
                         </div>
                        <div class="form-group col-md-12">
                            <h2>Digital Gold's Network</h2>
                         </div>
                         <div class="form-group col-md-12 ">
                         Digital Gold's is based upon a branch of Electrum.  Electrum's (Verge's Network) strength is speed and simplicity, with low resource usage. It uses secure remote servers that handle the most complicated parts of the Verge network and also allows users to recover their wallets with a secret seed phrase. Additionally, Electrum offers a simple and easy to use cold storage solution. This allows users to store all or part of their coins in an offline manner. Moreover, Electrum is one of the only wallets to provide native Tor and i2P support. By integrating Electrum with Tor and i2P, one can achieve anonymity while using the desktop/mobile wallet. Both IP address and transaction information is secured and does not leak to the connecting servers; increasing user privacy. Electrum enables multi-signature support, which requires more than one key to authorize a Electrum transaction. Standard transactions on the Verge network could be called 'Single-signature transactions' [4], because transfers require only one signature - from the owner of the private key associated with the Verge address. An Electrum transaction, with multi-signature support, requires the signatures of multiple people before the coins can be transferred. Verge then requires multiple different party addresses to be provided in order to do anything with them. Here is an example: One Electrum wallet is on your primary computer, the other on your smart phone - the coins cannot be spent without a signature from both devices. Thus, an attacker must gain access to both devices in order to steal your coins.
                         </div>
                        <div class="form-group col-md-12 ">
                            <h2>Key Features of an Digitals Gold Wallet</h2>
                         </div>
                         <div class="form-group col-md-12 ">
                         <b>Deterministic Key Generation </b>
                         If you lose your wallet, you can recover it from its seed. You are protected from your own mistakes
                         <b>Instant ON</b>
                         The client does not download the blockchain, it requests blockchain information from a server. No delays, always up-to-date.
                         <b>Locally signed Transactions</b>
                         Your private keys are not shared with the server. You do not have to trust the server with your coins.
                         <b>Freedom and Privacy</b>
                         The Digital Gold server does not store user accounts. You can also export your private keys, meaning YOU own your address.
                         </div>
                        <div class="form-group col-md-12 ">
                            <h2>Multi-Algorithm Support</h2>
                         </div>
                         <div class="form-group col-md-12 ">
                         Digital Golds branch of Verge is a multi-algorithm cryptocurrency that is designed to enable people with different types of mining devices to have equal access to earning coins. It is one of the only cryptocurrencies to support 5 hash functions combined on one blockchain. This results in increased security.  What makes Digital Gold (a branch of Verge)  stand out from other cryptocurrencies are the 5 Proof-of-Work algorithms that run on its blockchain, namely Scrypt, X17, Lyra2rev2, myr-groestl and blake2s. All 5 algorithms have a 30-second block target block time. The difficulty is influenced only by the algorithm's hash rate. This allows improved security and protection against 51% attacks.
                         </div>
                        <div class="form-group col-md-12 ">
                            <h2>Android Tor + I2P</h2>
                            Digital Gold (a branch of Verge) sits at the forefront of innovation in the mobile cryptocurrency space. We have pioneered and developed two very unique and first of their kind android wallets. One of which operates exclusively on The Onion Router Network (Tor) and the other operating exclusively on The Invisible Internet Project (i2P). The Verge Tor and I2p wallets are built around the premise of anonymity. The wallets have no built-in ability to connect to or broadcast user information over Clearnet. Transactions are completed via Simple Payment Verification (SPV), a technique described in Satoshi Nakamoto's paper that allows for the wallet to verify transactions through proof of inclusion; a method for verifying if a particular transaction is included in a block without downloading the entire block (similar to how an Electrum wallet functions). SPV allows for nearly instant payment confirmations because it acts as a thin client that only needs to download the block headers, which are drastically smaller than full blocks. The Digital Gold Tor and i2P wallets also have built in security features such as a 4 digit pin code and biometric locking options for an added layer of physical security. Additionally, the Verge Tor and i2P wallets are able to handle P2P QRcode scan transactions with instant verification. Clients are able to also import QRcodes from paper wallets to pull balances from cold storage if required.
                         </div>
                         <div class="form-group col-md-12 ">
                         <h2>P2P Platform-Integrated Portals</h2>
                         Peer-to-Peer (P2P) transaction support for Telegram, Discord and Twitter is supported by Digital Gold. Telegram is a free cloud-based instant messaging service that supports Android, iOS, Windows Phone, Windows NT, macOSand Linux. Telegram uses a symmetric encryption scheme called MTProto. The protocol was developed by Nikolai Durov and other developers at Telegram and is based on 256-bit symmetric AESencryption, RSA 2048 encryption and Diffie-Hellman key exchange. Discord is a proprietary freeware VoIP application that has widespread adoption in the crypto community. Like Telegram, Discord has support on Windows, macOS, Android, iOSand has a browser accessible web client. Implementing Digital Gold P2P capabilities on these platforms allows users to send and receive funds on the fly, no matter where they are (regardless if they have an actual wallet installed or not). P2P is an online technology that allows users to transfer coins via the internet or mobile device. To do this, consumers use an online application, or in this case a bot to designate the amount of coins to be transferred. The recipient is designated by just their username and once the transfer has been initiated by the sender, the recipient then receives a notification to use the online bot. that he has received a payment at a newly established deposit address. The user is then allowed to tweet or message the bot with a simple command such as '!withdraw'and is then prompted with a set of instructions on how to receive their newly acquired Digital Gold. This service does not require any additional information past the amount you want to send and who to send to. No privacy information such as IP addressing, location, name is retained during this process. Your personal identity outside of initiating the transaction remains completely anonymous. Digital Gold is one of the only cryptocurrencies to already offer P2P solutions for Telegram, Discord, Twitter and Internet Relay Chat (IRC) with Reddit, Slack and Steam support coming at a future date. These P2P offerings allow users to transfer Verge to anyone on the same social platform as them.
                         </div>
                        <div class="form-group col-md-12 ">
                            <h2>Wraith Protocol</h2>
                            Wraith Protocol makes it possible to choose between a public or private ledger for the first time in cryptocurrency history, while staying anonymous in both cases. Through this innovative new system, users who value transparency and accountability, e.g. merchants, have the option to have transactions viewable on the blockchain. On the other hand, it also provides an option to those who prefer transactions to vanish entirely. Wraith Protocol allows for complete anonymity to be maintained while providing a safe and secure method of sending and receiving Verge coins without transactions being traceable on a publicly accessible ledger. The update includes stealth Addressing and the latest Tor+SSL integration that will take our core QT users off of clearnet, and migrate them to exclusively operate on the latest Tor network. Also included are the capabilities to designate which ledger a user wishes to transact across, public or private. With elegant simplicity, the Wraith Protocol update will enable users to toggle a switch within the Core QT wallet that allows them to transact via stealth addressing with an additional layer of IP obfuscation through the Tor Network.
                         </div>
                         <div class="form-group col-md-12 ">
                            <H2>Chat on Digital Gold's Ewallet: Visp</H2>
                            Visp is a P2P (peer-to-Peer) Instant messaging system utilizing state-of-the-art encryption technology to keep your communications private. All messages are encrypted by the proven AES-256-CBC algorithm, and distributed between nodes in such a way as to prevent the recipients of messages from being inferred by assailants utilizing sophisticated traffic analysis. Whisper utilizes The Elliptic Curve Digital Signature Algorithm, which is a variant of the digital signature algorithm used in elliptic curve cryptography. ECDSA is used to give you the confidence of knowing messages you receive come from the original recipient and remain untouched in propagation. Messages are distributed via the preexisting Verge P2P network, and a copy of each encrypted message is stored on each node for a period of 48 hours.
                         </div>
                         <div class="form-group col-md-12 ">
                            <h2>How to create an eWallet </h2>
                            Digital Gold is available to download through the iOS AppStore and Google Play Store (Android) or
                            you can access through the Webclient application at (www.DigitalGold.io) or through our website
                            www.DigitalGold.com. Simply, sign up and follow the simple instructions to sign-up and complete
                            the simple KYC process to activate the ewallet.
                            Accounts are limited by default to in value to US Dollars 10,000, but the limit can be removed by
                            simply providing additional information as per BCN eWallet onboarding requirements.
                        </div>
                       
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection