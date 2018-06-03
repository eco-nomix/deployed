@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
 <div style="width:100%">

     <div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
         <div class="skip">&nbsp;</div>
             <div class="trans row">
                 <div class="col-md-8 col-md-offset-2">
                     <div style="width:100%;">
                         <div class="kinetic600">
                              Policies and Procedures
                         </div>
                     </div>
                     <div class="panel panel-default display">

                        <div class="panel-body">

                         <input type="hidden" name="_token" value="{{ csrf_token() }}">    <div class="col-md-12 indent">
                        <div class="form-group col-md-12 ">
                    	1.1 Mutual Commitment Statement
                    	</div>
                    	<div class="form-group col-md-12 ">

                         <ol type="A">
                            <li >In the spirit of mutual respect KineticGold is committed to:</li>
                            <ol type="I">
                                <li >Provide prompt, professional and courteous service and communications to all of its Members and Customers.</li>
                                <li>Provide the highest level of quality products, at fair and reasonable prices. </li>
                                <li>Exchange or refund the purchase price of any product, service or membership as provided in our Return Policy.</li>
                                <li>Deliver orders promptly and accurately.</li>
                                <li>Pay Profit-Sharing accurately and on a timely basis.</li>
                                <li>Expedite orders if an error or unreasonable delay occurs.</li>
                                <li>Roll out new products and programs with Member input and planning.</li>
                                <li>Implement changes in the Compensation Plan or Policies and Procedures that affect the Member with input from the Members</li>
                                <li>Support, protect and defend the KineticGold Business Opportunity</li>
                                <li>Offer Members KineticGold with such growth guided by the principles of Servant Leadership.</li>
                            </ol>
                            KineticGold in return, expects that its Members will:
                            </li>
                            <ol type="I">
                                <li>Conduct themselves in a professional, honest, and considerate manner.</li>
                                <li>Present KineticGold Corporate and product information in an accurate and professional manner.</li>
                                <li>Present the Compensation Plan and Return Policy in a complete and accurate manner.</li>
                                <li>Not make exaggerated income claims.</li>
                                <li>Make reasonable effort(s) to support and train Members and Customers in their downline.</li>
                                <li>Not engage in cross-line recruiting, unhealthy competition or unethical business practices.</li>
                                <li>Provide positive guidance and training to Members and Customers in their downline while exercising
                                    caution to avoid interference with other downlines. As such, a Member is discouraged from providing
                                    cross-line training to a Member or Customer in a different organization without first obtaining consent
                                    of the Member’s or Customer’s upline sponsor.</li>
                                <li>Support, defend the KineticGold Business Opportunity</li>
                                <li>Accurately complete and submit the Member Agreement and any requested supporting documentation in a timely manner.</li>
                            </ol>
                         </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                             1.2 Eco-Nomix Policies and Compensation Plan Incorporated into the Member<br> <p style="margin-left: 40px"> Agreement</p>
                        </div>
                        <div class="form-group col-md-12 ">
                         <ol type="A">
                            <li>Throughout these Policies, when the term “KineticGold used, it collectively refers to the KineticGold, these Policies and Procedures, and the KineticGold Compensation Plan.</li>
                            <li>The most current version of these Policies and Procedures are available on the KineticGold website and should be read by the potential member before joining.</li>
                         </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                        1.3 Purpose of Policies
                        </div>
                        <div class="form-group col-md-12 ">
                           <ol type="A">
                            <li>KineticGold is a membership sales company that markets products and services through a company sponsored website.
                                Members should refer those with questions about products or the marketing plan to the Website.
                                KineticGold defines the relationship between Members and KineticGold to explicitly set a standard acceptable business conduct, KineticGold has established these
                                Policies and Procedures.</li>
                            <li>(i)KineticGold Members are required to comply with KineticGold's Terms and Conditions found within the Member Agreement, which KineticGold
                                may amend from time to time in its sole discretion; (ii) all Federal, Provincial, Territorial, and/or laws governing his, her and/or its KineticGold and (iii)
                                these Policies and Procedures</li>>
                            <li>KineticGold Members must review the information in these Policies and Procedures carefully.
                                Should a Member have any questions regarding a policy or rule, the Member is encouraged to seek an answer directly from KineticGold Customer Service and not rely upon any other
                                upline Member. </li>
                          </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                        1.4 Changes, Amendments, and Modifications
                        </div>
                        <div class="form-group col-md-12 ">
                         <ol type="A">
                            <li>Federal, State, and local laws, as well KineticGold's policies and procedures perodically change, KineticGold reserves the right to ammend this Agreement
                            and the prices in its KineticGold Product List in its sole and absolute discretion.
                            KineticGold's amendments shall appear in Official KineticGold Materials. This provision does NOT apply to the arbitration clause found in Section 13,
                            which can only be modified via mutual consent.</li>
                            <li>Any such amendment, change, or modification shall be effective immediately upon notice by one of the following methods:
                                  <ol type="I">
                                        <li>Posting on the official KineticGold website;</li>
                                        <li>Electronic mail); or</li>
                                        <li>Through the Eco-Nomix newsletters or other Eco-Nomix communication channels.</li>
                                  </ol>
                            </li>
                         </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                        1.5 Delays
                        </div>
                        <div class="form-group col-md-12 ">
                                <p style="margin-left: 20px" >KineticGold shall not be responsible for delays or failures in performance of its obligations
                                when such failure is due to circumstances beyond its reasonable control. This includes, without limitation, strikes,
                                labor difficulties, transportation difficulties, riot, war, fire, and/or weather, curtailment of a source of supply,
                                or government decrees or orders.</p>
                        </div>

                        <div class="form-group col-md-12 ">
                        1.6 Effective Date
                        </div>
                        <div class="form-group col-md-12 ">
                            <p style="margin-left: 20px" > These Policies and Procedures shall become effective as of June 1st, 2018 and, at such time,
                            shall automatically supersede any prior Policies and Procedures (the “old Policies and Procedures”), and, on that date,
                            the old Policies and Procedures shall cease to have any force or effect.</p>
                        </div>
                        <div class="form-group col-md-12 ">
                        2.0 BASIC PRINCIPLES
                        </div>
                        <div class="form-group col-md-12 ">
                        2.1 Becoming An KineticGold Member
                        </div>
                        <div class="form-group col-md-12 ">
                         <p style="margin-left: 20px" >To become a Member, an applicant must comply with the following requirements:</p>
                            <ol type="A">
                                <li>Be of the age of majority (not a minor) in his or her state of residence.</li>
                                <li>Reside or have a valid address where materials may be sent.</li>
                                <li>Have a valid Social Security Number, Federal Tax Identification Number or submit a fully executed IRS W8 or equivalent if living outside the US.</li>
                                <li>Submit a completed and electronically signed Member Agreement to Eco-Nomix through its website.</li>
                            </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                        2.2 New Member Registration
                        </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>A new Member will self-enroll on the Sponsor’s website. KineticGold will accept the Web-enrollment and Member Agreement by accepting
                                the “electronic signature” stating the new Member has accepted the Terms and Conditions and Member Agreement. Please note that
                                such electronic signature constitutes a legally binding agreement between KineticGold and the member.</li>
                                <li>KineticGold reserves the right to require signed paperwork for a KineticGold account, regardless of origin.</li>
                                <li>If requested the signed Member Agreement must be received by KineticGoldwithin 14 days of enrollment.</li>
                                <li>Signed documents, including, but not limited to, Member personal agreements, are legally binding contracts which must not be altered,
                                tampered with or changed in any manner after they have been signed. False or misleading information,
                                forged signatures or alterations to any document, including business registration forms, made after a document
                                has been signed may lead to sanctions, up to and including involuntary termination of the Member’s position.</li>

                            </ol>
                        </div>

                        <div class="form-group col-md-12 ">
                        2.3 Rights Granted by KineticGold
                        </div>
                        <div class="form-group col-md-12 ">
                         <p style="margin-left: 20px" >KineticGold hereby grants to the Member a non-exclusive right, based upon the Terms and Conditions contained in the Member Agreement and
                         these Policies and Procedures, to:</p>
                         <ol type="A">
                            <li>Purchase KineticGold membership, products and services</li>
                            <li>new Members and Customers in the United States and in countries where KineticGold may become established after the effective date of these Policies and Procedures.</li>
                         </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                        2.4 Identification Numbers
                        </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>Each member is required to provide his or her Social Security Number, or Federal Tax Id Number, if located withing the United States or
                                any of its territories, to Eco-Nomix on the KineticGold website.  Equivalent documentation will be required from those outside of the US.
                                KineticGold reserves the right to withhold payments to Members who fails to provide such information or who provides false information to KineticGold
                                 </li>
                                <li>Upon enrollment, KineticGold will provide an KineticGold Identification Number to the Member. This number will be used to place orders,
                                structure organizations, and track Awards and Profit-Sharing.</li>
                            </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                        2.5 Renewals and Expiration of the Member Agreement
                        </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>There are no renewal fees or purchase requirements for members to maintain their membership.</li>
                                <li>There is no annual fee for the Debit card once it has been issued. </li>
                                <li>Any Member who was terminated is not eligible to re-apply for an KineticGold Membership for 12 months following the Termination of the Member Agreement.</li>
                                <li>The downline of the terminated Member will roll up to the immediate, upline Sponsor.</li>
                            </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                        2.6 Business Entities
                        </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>A corporation, partnership, LLC, or trust (collectively referred to as a “Business Entity”) may apply to be an KineticGold Member.
                                This Member business and position will remain temporary until the proper documents are received. The Business Entity must submit one of
                                the following documents: Certificate of Incorporation, Articles of Organization, Partnership agreement or appropriate Trust documents.
                                KineticGold must receive these documents within 14 days from the date the Member Agreement was signed.</li>
                                <li>An KineticGold Member may change their status under the same Sponsor from an individual to a partnership, LLC, corporation,
                                trust or from one type of business entity to another.</li>
                            </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                        2.7 Independent Business Relationship; Indemnification for Actions
                        </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>The KineticGold Member is an independent contractor, a purchaser of a franchise or business opportunity.
                                Therefore, each Member’s success depends upon his or her individual efforts.</li>
                                <li>The Agreement between KineticGold and its Members does not create an Employer/employee relationship, agency,
                                partner or joint venture between KineticGoold and the Member>
                                <li>An KineticGold Member shall not be treated as an employee of KineticGold for any purpose including, without limitation, for Federal, State,  or Local tax purposes.
                                 All Members are responsible for paying local, State, Provincial, and Federal tax for all compensation earned as a Member of KineticGold. Any compensation
                                 received by Members from KineticGold will be governed by the applicable U.S. or Canadian tax laws, or laws of any other applicable jurisdiction.
                                 The Member does not have KineticGold's or implied authority to bind KineticGold to any obligation or to make any commitments by or on behalf of KineticGold.
                                 Each Member, whether acting as management of a Business Entity or represented as an individual, shall establish his or her own goals, hours, methods
                                 of operation and sale, so long as he or she complies with the Terms of the Member Agreement, KineticGold's Policies and Procedures and
                                 applicable State, Federal and Provincial laws.</li>
                                <li>A KineticGold Member is fully responsible for his or her verbal and written communications regarding KineticGold's products, services, and the Compensation plan
                                of KineticGold that are not expressly contained within official KineticGold materials and shall indemnify and hold harmless KineticGold, its directors,
                                officers, employees, product suppliers and agents against all liability including judgments, civil penalties, refunds, attorney fees and
                                court costs incurred by result of the Member’s unauthorized representations or actions. This Provision shall survive the termination of the KineticGold Member Agreement.</li>

                            </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                        2.8 Insurance – Business Pursuits Coverage
                        </div>
                        <div class="form-group col-md-12 ">
                            <p style="margin-left: 20px">KineticGold encourages Members to arrange insurance coverage for their business. A homeowner insurance policy does not cover business
                            related injuries, or the theft of, or damage to, inventory or business equipment. KineticGold Members need to contact their insurance
                            agent to make certain their business property is protected. In most instances, this may be accomplished with a “Business Pursuit”
                            endorsement to an existing homeowner’s policy.</p>
                        </div>
                        <div class="form-group col-md-12 ">
                        2.9 Errors or Questions
                        </div>
                        <div class="form-group col-md-12 ">
                         <p style="margin-left: 20px">If a Member has questions and believes any errors have been made regarding Awards or Profit-Sharing, business reports, orders, or charges,
                         the Member must notify KineticGold in writing within 30 days of the date of the error or incident in question. Any such errors, omissions or
                         problems not reported within 30 days shall be deemed waived by the member</p>
                        </div>
                         <div class="form-group col-md-12 ">
                        3.0 KineticGolds’S Member RESPONSIBILITIES
                        </div>
                         <div class="form-group col-md-12 ">
                            3.1 Correct Addresses
                        </div>
                         <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>It is the responsibility of member or Customer to make sure KineticGold has the correct shipping address before any orders are shipped.</li>
                                <li>A Member or Customer will need to allow up to 30 days for processing after the notice of address change has been received by KineticGold.</li>
                                <li>A Member or Customer may be assessed a $20 fee for returned shipments due to an incorrect shipping address.</li>

                            </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                            3.2 Training and Leadership
                        </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>Any KineticGold Member who Sponsors another Member must perform an authentic assistance and training functions to ensure his or her downline
                                is properly operating his or her KineticGold business. Sponsoring Members should have contact and communication with the Members in their
                                downline organizations. Examples of communication may include, not limited to, written correspondence, telephone, contact,
                                team calls, voice-mail, e-mail, personal meetings, accompaniment KineticGold Members to KineticGold meetings, training sessions and any other related functions.</li>
                                <li>A KineticGold Member should monitor the Members in his or her downline organizations to ensure that downline Members do not make
                                improper product or business claims, or engage in inappropriate conduct. Upon request, such Member should provide documented evidence to KineticGold of
                                his or her ongoing responsibilities of a Sponsor.</li>
                                <li>KineticGold Members are encouraged to motivate and train new Members about KineticGolds’s products and services, effective Marketing techniques,
                                the KineticGold compensation Plan and compliance with company Policies and Procedures.</li>

                                <li>We emphasize that ALL sales of KineticGolds’s products and Customers are to be handled by the website.</li>
                                <li>Sales Aids – To promote both the products and the opportunity, Members must use the sales aids and support materials produced by KineticGold.
                                If members develop their own sales aids and promotional materials including Internet advertising, notwithstanding Members’ good intentions, they may unintentionally
                                violate any number of statutes or regulations affecting KineticGold's business. These violations, although they may be relatively few in number,
                                could jeopardize the KineticGold opportunity for all Members. Accordingly members must submit all written sales aids, promotional materials,
                                websites and other literature to KineticGold for Company’s approval prior to use. Unless the member receives specific written approval
                                to use material ,the request shall be deemed denied. All Members of KineticGold shall guard and promote the good reputation of KineticGold and its products and services.
                                 The marketing and promotion of KineticGold, the KineticGold opportunity, the Award and Profit-Sharing Plan, and KineticGold products and services
                                 shall be consistent with the public interest, and must avoid all discourteous, deceptive, misleading, unethical or immoral conduct or practices.</li>
                            </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                            3.3 Constructive Criticism
                        </div>
                        <div class="form-group col-md-12 ">
                            KineticGold desires to provide its independent Members with the best products and Award and Profit-Sharing in the industry.
                            Accordingly KineticGold values constructive criticism and encourages the submission of written suggestions in Compliance with the following policies.
                            <ol type="A">
                                <li>There are no disparaging comments about KineticGold, its products or Profit-Sharing Plan, by the member to KineticGold, the
                                Field or any disruptive behavior at KineticGold meetings or events, without purpose other than to dampen the enthusiasm KineticGold Members.
                                KineticGold Members must not belittle KineticGold, other KineticGold Members,  products or services, the Profit-Sharing Plan,KineticGold directors,
                                officers, or employees, KineticGold agents. Such action presents a material breach of these Policies and Procedures and may be subject to
                                sanctions as deemed appropriate by KineticGold.</li>
                                <li>KineticGold endorses the following code of ethics:
                                    <ol type="I">
                                        <li>An KineticGold Member must show fairness, tolerance, and respect to all people associated with KineticGold, regardless of race,
                                        social class or religion, thereby fostering a “positive atmosphere” of teamwork, good morale and community spirit.</li>
                                        <li>A Member shall strive to resolve with KineticGoldic issues, including issues with upline and downline Members,
                                        by emphasizing tact, sensitivity, good will and taking care not to create additional prolems.</li>
                                        <li>Members must remain responsible, professional and conduct themselves with kindness.</li>
                                        <li>KineticGold Members shall not make disparaging statements about KineticGold, other Members, KineticGold product suppliers or agents,
                                        products, services, KineticGold marketing campaigns, or the Profit-Sharing Plan, or make statements that unreasonably
                                        offend, mislead or coerce others.</li>

                                    </ol>
                                </li>
                                <li>KineticGold may take appropriate action against a Member if it determines, in its sole discretion, that a Member’s conduct is detrimental,
                                disruptive, or injurious to KineticGold or to other Members.</li>
                            </ol>
                         </div>
                        <div class="form-group col-md-12 ">
                        3.4 Reporting Policy Violation
                        </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>A Member who observes a policy violation by another Member should submit a written and signed letter (e-mail will not be accepted)
                                   of the violation directly to the KineticGold offices. The letter shall set forth the details of the incident as follows:
                                    <ol type="I">
                                        <li>The nature of the violation;</li>
                                        <li>Specific facts to support the allegations;</li>
                                        <li>Dates;</li>
                                        <li>Number of occurrences;</li>
                                        <li>Member involved; and</li>
                                        <li>Supporting documentation</li>
                                    </ol>
                                </li>
                                <li>Once the matter has been presented to KineticGold, it will be research thoroughly by the Compliance Department and appropriate action will be taken.</li>
                                <li>This section refers to the general reporting of Policy violations as observed members for the mutual effort to support, protect, and
                                defend the integrity of the KineticGold business and opportunity. If a Member has a grievance or complaint against another Member
                                which directly relates to his or her KineticGold business, the guidelines set forth in these Policies must be followed.</li>
                            </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                            3.5 Sponsorship
                        </div>
                         <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>The Sponsor is the person who introduces a Member or Customer to KineticGold, helps them complete their enrollment, and supports
                                and trains those in KineticGold.</li>
                                <li>KineticGold recognizes the Sponsor as the name(s) shown on the first:
                                   <ol type="I">
                                        <li>Physically signed Eco-Nomix Member Agreement on file; or</li>
                                        <li>Electronically signed member Agreement from a KineticGolds website.</li>
                                        <li>Was referenced by the new Member whith a KineticGold Referral Link to access the site</li>

                                        <li>A member agreement that contains notations such as “by phone” or by other individuals (i.e. KineticGold Spouses, relatives, or friends)
                                        is not valid and will not be accepted by KineticGold.</li>
                                        <li>KineticGold recognizes that each new prospect has the right to choose his or her own Sponsor, but KineticGold will not allow
                                        Members to engage in unethical sponsoring activities.</li>
                                <li>All KineticGold Members in good standing have the right to Sponsor and enroll others into KineticGOld. While engaged in sponsoring a member,
                                 it is not uncommon to encounter situation where more than one Member will approach the potential member. It is the KineticGold courtesy that the new prospect
                                 will be sponsored by the first Member who presented a comprehensive introduction to the KineticGold products or business opportunity.</li>
                                <li>A guest of any KineticGold Member or Customer who attended an KineticGold event or conference call shall be considered 'Protected' For 60 days
                                following the event, a Prospect cannot be solicited or sponsored by another KineticGold Member who attended the same event. An KineticGold Eventcan be
                                defined as the following:
                                    <ol type="I">
                                         <li>Any KineticGold training session;</li>
                                         <li>Conference call;</li>
                                         <li>Fly-in meeting; or</li>
                                         <li>Presentation, including but not limited to an KineticGold at home presentation, whether sponsored by KineticGold,
                                          a Member, a Customer, or an agent or agency designated by Eco-Nomix.</li>
                                    </ol></li>

                            </ol>
                        </div>

                        <div class="form-group col-md-12 ">
                        3.6 Cross Sponsoring Prohibition
                        </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                “Cross sponsoring” is defined as the enrollment into a different line of sponsorship of an individual, or Business Entity,
                                that already has a signed Member.  Actual or attempted cross sponsoring is not allowed. If cross sponsoring is verified by KineticGold,
                                sanctions up to and including termination of a Member’s position may be imposed.</li>
                                <li>The use of a Spouse’s or relative’s names, assumed names, DBA, corporation, partnership, trust, Federal ID numbers, or fictitious ID
                                numbers to evade or circumvent this Policy is not permitted.</li>
                                <li>This Policy does not prohibit the transfer of an KineticGold account in accordance with KineticGold Sale or Transfer as forth in these Policies.</li>

                            </ol>
                        </div>
                         <div class="form-group col-md-12 ">
                            3.7 Adherence to the Eco-Nomix Compensation Plan
                        </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>A Member must adhere to the Terms of the KineticGold Profit-Sharing Plan as set forth in these Policies and Procedures as well as in
                                KineticGold literature. Departure for the Profit-Sharing Plan is prohibited.</li>
                                <li>A Member shall not offer the KineticGold opportunity through, or in combination with, any other system, program, or method of
                                marketing other than that specifically set forth in official KineticGold literature.</li>
                                <li>A Member shall not require or encourage a current or prospective Customer or Member to participate in KineticGold in any manner that varies from the Profit-Sharing plan
                                as set forth in official KineticGold literature.</li>
                                <li>A Member shall not require or encourage a current or prospective Customer or Member to make a purchase from or payment to any individual
                                or other entity as a condition to participating in the KineticGold Profit-Sharing Plan, other than such purchases or payments required to
                                naturally build their business.</li>
                            </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                            3.8 Adherence to Laws and Ordinances
                        </div>
                        <div class="form-groupKineticGold2 ">
                            <ol type="A">
                                    <li>Many cities and counties have laws regulating certain home-based businesses. In most cases, these ordinances do not apply to Members because
                                    of the nature of the business.
                                     <br>However, Members must check their local laws and obey the laws that do affect them.</li>
                                    <li>An KineticGold Member shall comply with all Federal, State, Provincial and local laws and regulations
                                    in their conduct of his or her KineticGold business.</li>
                            </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                            3.9 Compliance with Applicable Tax Laws
                        </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>KineticGold will automatically provide a complete 1099 Miscellaus Form (nonemployee compensation) for US Members whose earnings for the year
                                is at least $600, or who received trips, prizes or awards valued at $600 or more. If KineticGold purchases are less than stated above,
                                IRS forms will be sent only at the request of the Member, and $20 may be assessed by Eco-Nomix. T-4’s will be sent to Members who earn more than $500
                                or who received trips, prizes, or awards valued at $500 or more. KineticGold Members are responsible for the payment of taxes on these Profit-Sharing,
                                or awards provided to them by KineticGold. Members who reside outside of the US will be subject to reporting as required for that country.</li>
                                <li>A Member accepts sole responsibility for and agrees to pay all Federal, State, Provincial taxes on any income earned as an independent Contractor,
                                 and further agrees to indemnify KineticGold from any failure to pay such tax amounts when due.</li>
                                <li>If a Member’s business is tax exempt, the Federal Tax Identification number must be provided to KineticGold in writing.</li>
                                KineticGold encourages all Members to consult with a tax advisor for additional information about their business.</li>
                            </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                        3.10 Single KineticGold account per Individual
                        </div>
                        <div class="form-group col-md-12 "><p style="margin-left: 20px">A Member may operate or have an ownership in an KineticGold account as the legal or equitable,
                        as a sole proprietorship, partner, shareholder, trustee, or beneficiary, in only one Eco-Nomix position. No individual may have, operate or receive compensation
                        from more than one KineticGold Profit-Sharing plan. A Household may contain multiple KineticGold Account holders who are independent. A “Household” is defined
                        as all individuals who are living at or doing business at the same address, and who are related by blood, marriage, domestic KineticGoldip, or
                        adoption, or who are living together as a family unit or in a family-like setting.</p>
                        </div>
                        <div class="form-group col-md-12 ">
                        3.11 Actions of Household Members or Member Parties
                        </div>
                        <div classKineticGoldoup col-md-12 ">
                          <p style="margin-left: 20px">If any member of an immediate household engages in any activity which, if performed by the Member, would violate
                          any provision of the Agreement, such activity will be deemed a violation by the Member and KineticGold may take disciplanary action pursuant to these
                          Policies and Procedures against the Member. Similarly, if any individual is associated in any way with a corporation, partnership, LLC, trust
                          or other entity (collectively “Business Entity”) and violates the Agreement, such action(s) will be deemed a violation by the Business and KineticGold
                           may take disciplinary action against the Business Entity. Likewise, if a Member enrolls in KineticGold as a Business Entity, each Member Party
                           of the Business Entity shall be personally and individually bound to, and shall comply with, the Terms and Conditions of the Agreement.</p>

                        <div class="form-group col-md-12 ">
                        3.12 Solicitation for Other Companies or Products
                        </div>
                       <div class="form-group col-md-12 ">
                           <ol>
                                <li>An KineticGold Member may participate in other direct sales, multilevel, network marketing or relationship marketing business ventures or marketing opportunities.
                                However, during the Term of this Agreement and for one (1) year thereafter, an KineticGold Member may not recruit any KineticGold Member or Customer for
                                any other direct sales or networking business, unless that Member or Customer was personally sponsored by such Member.</li>
                                <li>The term “recruit” means actual or attempted solicitation, enrollment or agreement, or effort to influence in any other way
                                (either directly or through a third party), another Member or KineticGold to enroll or participate in any network marketing opportunity.
                                This conduct represents recruiting even if the Member’s actions are in response to an inquiry made by another Member or Customer.</li>
                                 <li>During the term of this Agreement and for a period of six (6) months thereafte a KineticGold Member must not sell, or entice others to sell,
                                 any competing products or services, including training materials, to other KineticGold customers or Members. Any product or service in the
                                 same category as an KineticGold product or service is deemed to be competing (i.e., any competing product or service regardless of
                                 differet cost or quality. This provision does not apply to services which are outside of the primary scope of KineticGold, a banking platform.</li>
                                <li>A Member may not display or bundle KineticGold products or services, KineticGold Literature, on a website
                                to avoid confusing or misleading KineticGold Customers or Members into believing there is a relationship between KineticGold and non-KineticGold products and services.</li>
                                <li>A member shall not offer any non-KineticGOld opportunity, products at any KineticGold meeting, seminar or convention, or immediately following an KineticGold event.</li>
                                <li>A violation of any of the provisions in this section shall constitute unreasonable and unwarranted contractual interfere with KineticGold and its Members
                                and would inflict irreparable harm on KineticGold. In such event, KineticGold may, at its sole discretion, impose any sanction it deems appropriate
                                against such Member or such Member’s positions including termination, or seek immediate injunctive relief without the necessity of posting a bond.</li>
                            </ol>
                        <div class="form-group col-md-12 ">
                        3.13 Presentation of the Eco-Nomix Opportunity
                        </div>

                        <div class="form-group col-md-12 ">
                            <p style=KineticGoldeft: 20px">In presenting the Eco-Nomix opportunity to potential Customers and Members, a KineticGold member required to comply with
                            the following provisions:</p>
                            <ol type="A">
                                <li>A Member shall not misquote or omit any significant material fact about the KineticGold Profit-Sharing plan and method of operation>
                                <li>Member shall make it clear that the Profit-Sharing Plan is based upon deposits to the KineticGold Banking platform and the sponsoring of new Members.</li>
                                <li>A Member shall make it clear that success can be achieved only through substantial independent efforts.</li>
                                <li>Members shall not make any unauthorized income projections, claims, or guarantees while presenting KineticGold out side of published examples including the assumptions
                                 .</li>
                                <li>A Member may not make any claims regarding products or services of any product marketing KineticGold, except those contained in official KineticGold literature.</li>
                                <li>A Member may not use official KineticGold material to promote the KineticGold business opportunity in any country where KineticGold has not established a “presence.”</li>
                                <li>In an effort to conduct best business practices, KineticGold has developed the Income Disclosure Statement (“IDS”). The KineticGold IDS is designed to
                                convey truthful, timely, and comprehensive information regarding the Profit-Sharing that that KineticGold Members may earn. In order to accomplish this
                                objective, a copy of the IDS must be presented to all prospective Members.
                                <li>A copy of the IDS must be presented to a prospective Member anytime the Profit-Sharing Plan is presented or discussed, or any type of income claim
                                or earnings representation is made.</li>
                                <li>The terms “income claim” and/or “earnings representation” (collectively “income claim”) include;
                                        <ol type="1">
                                            <li>statements of average earnings,</li>
                                            <li>statements of non-average earnings,</li>
                                            <li>statements of earnings ranges,</li>
                                            <li>income testimonials,</li>
                                            <li>lifestyle claims,</li>
                                            <li>hypothetical claims.</li>
                                        </ol></li>
                                <li>Examples of “statements of non-average earnings include, “Our number one KineticGold member earned over a million dollars last year” or
                                “Our average ranking Member makes five thousand dollars per month.”</li>
                                <li>An example of KineticGold “statement of earnings ranges” is “The monthly income for our higher ranking Members is ten thousand dollars on the low end
                                to thirty thousand dollars a month on the high end.”</li>

                            </ol>
                       </div>

                         <div class="form-group col-md-12 ">
                             3.14 Sales Requirements are Governed by the KineticGold Profit Sharing PlanKineticGoldn Plan
                        </div>
                        <div class="form-group col-md-12 ">
                          <ol type="A">
                                <li>KineticGold Members may purchase KinticGold products for there own use and are not for the purpose of resale other than at KineticGold standard Pricing.
                                 There are no exclusive KineticGold prices granted to anyone. No franchise fees are applicable to an KineticGold business.
                                   Members should purchase only those products that they need or can utilize personally.  Each member has direct access to products through the website.</li>
                               </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                        4.0 ORDERING
                        </div>
                        <div class="form-group col-md-12 ">
                        4.1 General Order Policies
                        </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>“Bonus Buying” is strictly and absolutely prohibited and includes;
                                <ol type="a">
                                    <li>the enrollment of individuals or entities without the knowledge of
                                and/or execution of an Agreement by such individuals or Business Entities;</li>
                                    <li>for fraudulent enrollment of an individual or entity as a Member or Customer; </li>
                                    <li>the enrollment or attempted enrollment of non-existent individuals as Members or Customers (“phantoms”); </li>
                                    <li>purchasing KineticGold products or services on behalf of another KineticGold, or under another Member’s or Customer’s ID number, to qualify for  bonuses; </li>
                                    <li>purchasing excessive KineticGold products or services that cannot reasonably be used; <li>
                                    <li>any other mechanism or artifice to qualify for  incentives, prizes, commissions that is not driven by bona fide product or service purchases by end user consumers.</li>
                                </ol>
                                <li>Members shall not use another Member’s or Customer’s credit card or debit checking account to enroll in KineticGold or purchase products or services
                                without the account holder’s written permission. Such documentation must be kept indefinitely in case KineticGold needs to reference this.</li>
                                <li>Regarding an order with KineticGold or incorrect payment, KineticGold will attempt to contact the Member by phone, mail or e-mail in order to
                                obtain another form of payment. If these attempts are unsuccessful after 10 business days, the order will be canceled.</li>
                                <li>Prices are subject to change without notice.</li>
                                <li>A Member or Customer who is a recipient of a damaged or incorrect order must notify KineticGold within 30 calendar days from receipt of the order and follow the Procedures as set forth in these Policies.</li>
                            </ol>

                        </div>
                        <div class="form-group col-md-12 ">
                        4.2 Insufficient Funds
                        </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>All checks returned for insufficient funds will be re-submitted for payment. A $35 fee will be charged to the account of the Member or Customer for
                                all returned checks and insufficient funds.</li>
                                <li>All transactions involving returned checks or insufficient funds through a credit card, which are not resolved in a timely manner by the Member constitute grounds
                                for disciplinary sanctions.</li>
                                <li>If a credit card order or automatic debit is declined  the Customer or Member will be contacted for an alternate form of payment. Payment to KineticGold
                                is declined a second time, the Customer or Member may be deemed ineligible to purchase Eco-Nomix products or services.</li>
                            </ol>
                         </div>
                         <div class="form-group col-md-12 ">
                        4.3 Sales Tax Obligation
                        </div>
                        <div class="form-group col-md-12 ">
                             <ol type="A">
                                <li>KineticGold will comply with all State, Provincial and local taxes and regulations governing the sale of KineticGold products and services.</li>
                                <li>KineticGold will collect and remit sales tax on Member orders unless a Member furnishes KineticGold with the appropriate Resale Tax Certificate form, unless
                                 sales tax is prepaid based upon the suggested retail price. KineticGold will remit the sales tax to the appropriate Status, Provincial and local jurisdictions.
                                 The Member may recover the sales tax when he or she makes a sale. KineticGold Members are responsible for any additional sales taxes due on products
                                 marked up and sold at a higher price.</li>
                                <li>KineticGold Members to consult with a tax advisor for additional information for his or her business.</li>
                            </ol>
                            </div>
                        <div class="form-group col-md-12 ">
                        4.4 Chargeback Policy
                        </div>
                        <div class="form-group col-md-12 ">
                        <p style="margin-left: 20px">When KineticGold receives notice of a chargeback from either a customer or a Member, the sponsor will be assessed a fee.
                        This is done to ensure KineticGold Members are always careful when it comes KineticGold card related issues.</p>
                        </div>
                     <div class="form-group col-md-12 ">
                        5.0 PAYMENT OF BONUSES
                        </div>
                        <div class="form-group col-md-12 ">
                        5.1 Bonus Qualifications
                        </div>
                        <div class="form-group col-md-12 ">
                           <ol style="A">
                                <li>A Member must be in compliance with KineticGold Procedures to qualify for Profit-Sharing. So long as a Member complies with the Terms of the Agreement,
                                 KineticGold shall pay Profit-Sharing to such Members in accordance with the Profit-Sharing Plan.</li>
                                <li>KineticGold will not issue a payment to a Member without the receipt of a dated and signed KineticGold Member Agreement or Electronic Authorization.</li>
                                <li>KineticGold reserves the right to postpone Profit-Sharing until such time the cumulative amount exceeds $100 during the Pre-Launch period.</li>
                                <li>Once launced Profit-Sharing shall be paid immediately into the members checking account at KineticGolds Off-Shore bank.</li>
                            </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                        5.2 Computation of Profit-Sharing                     </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>In order to qualify to receive bonuses, a Member must be in good standing and comply with the Terms of the Agreement and these Policies and Procedures.
                               Profit-Sharing Bonuses are calculated as deposits are made into a members account.</li>
                                <li>An KineticGold Member must review his or her monthly statement and bonus reports promptly and report any discrepancies within 30 days of receipt.
                                After the 30-day “grace period” no additional requests will be considered for Profit-Sharing recalculations.</li>
                                <li>For additional information on payment of Profit-Sharing, please review the Compensation Plan.</li>
                            </ol>

                        </div>
                        <div class="form-group col-md-12 ">
                        5.3 Adjustments to Bonuses for Returned Products or Member Memberships.
                        </div>
                        <div class="form-group col-md-12 ">
                             Profit-Sharing bonuses are based on the actual deposit into KineticGold member bank accounts.
                                Any adjustment to said deposits will cause Profit-Sharing bonuses to be recalculated and adjusted.</li>

                        </div>

                        <div class="form-group col-md-12 ">
                        6.0 SATISFACTION GUARANTEED AND RETURN OF SALES AIDS
                        </div>
                        <div class="form-group col-md-12 ">
                         <ol type="A">
                           <li>KineticGold offers a one hundred percent (100%) thirty-day money back guarantee for all non customized products.</li>
                           <li>With respect to return of Sales Aids, KineticGold  offers refund opportunities depending on the product or service purchased.
                           Shipping and handling incurred will not be refunded.</li>
                           <li>Customized products (such as business cards) may only be returned if the customized information (name, address, etc) is other than as ordered. </li>
                         </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                        6.1 Return Process
                        </div>
                       <div class="form-group col-md-12 ">
                            <ol type="A">
                              <li>All returns, whether by a Customer, or Member, must be made as follows:
                                    <ol type="I">
                                        <li>Obtain Return Merchandise Authorization from KineticGold;</li>
                                        <li>Ship items to the address provided to KineticGold Customer service when order was placed</li>
                                        <li>A copy of the orinal invoice is returned with the returned products or service. Such invoice must reference the RMA and include the reason for the return.</li>
                                        <li>Ship back product in manufacturer’s box exactly as was delivered.</li>
                                    </ol></li>
                                <li>All returns must be shipped to KineticGold pre-paid, as KineticGold does not accept shipping collect packages. KineticGold recommends shipping
                                returned products by UPS or FedEx with tracking and insurance as risk of loss or damage in shipping of the returned product shall be borne solely
                                by the Customer, or Member. If returned product is not received at KineticGold's Distribution Center, it is the responsibility of the Customer,
                                or Member to trace the shipment and no credit will be applied.</li>
                                <li>The return of $500 or more of products for a refund within a calendar year, by a Member, may constitute grounds for involuntary termination.</li>
                  </ol>

                        </div>
                        <div class="form-group col-md-12 ">
                        7.0 PRIVACY POLICY
                        </div>
                        <div class="form-group col-md-12 ">
                        7.1 Introduction
                        </div>
                         <div class="form-group col-md-12 ">
                        <p style="KineticGoldft: 20px">This Privacy Policy is to ensure that all Customers and Members understand and adhere to KineticGold principles of confidetiality</p>
                        </div>
                        <div class="form-group col-md-12 ">
                        7.2 Expectation of Privacy
                        </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>KineticGold recognizes and respects the importance its Customers and Members place on the privacy of their financial and personal information.
                                KineticGold will make reasonable efforts to safeguard the privacy of, and maintain the confidentiality of its Customers’ Member and account information
                                and nonpublic personal information.</li>
                                <li>By the KineticGold Member Agreement, a Member authorizes KineticGold to disclose his or her name and contact information to upline Members solely
                                for activities related to the furtherance of the KineticGold business. A Member hereby agrees to maintain the confidentiality and
                                security of such information and to use it solely for the purpose of supporting and KineticGold his or her downline organization and conducting
                                the KineticGold business.</li>
                                <li>KineticGold will not disclose any personal information to outside third parties unless required by law.</li>
                            </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                            7.3 Employee Access to Information
                        </div>
                        <div class="form-group col-md-12 ">
                        8.0 KineticGold INFORMATION AND TRADE SECRETS
                        </div>
                        <div class="form-group col-md-12 ">
                        8.1 Business Reports, Lists, and Proprietary Information
                        </div>
                        <div class="form-group col-md-12 ">
                            <p style="margin-left: 20px">By completing and signing the KineticGold Member Agreement, the Member acknowledges that Business Reports,
                            lists of KineticGold Member names and contact information and any other KineticGold infomation, which contains KineticGold member information,
                            financial information, scientific or other information both written or otherwise circulated by KineticGold pertaining to the business of KineticGold,
                            are confidential and proprietary information and trade secrets belonging to KineticGold.</p>
                        </div>
                        <div class="form-group col-md-12 ">
                        8.2 Obligation of Confidentiality
                        </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>Use the information in the Reports to compete with KineticGold or for any purpose other than promoting his or her Kinetic business is prohibited;</li>
                                <li>Use or disclose to any person or entity any confidential information contained in the Reports, including the replication of KineticGold genealogy
                                 from any KineticGold reports is prohibited.</li>
                            </ol>
                        </div>
                         <div class="form-group col-md-12 ">
                        8.3 Breach and Remedies
                        </div>
                         <div class="form-group col-md-12 ">
                         The Member acknowledges that such proprietary information is of such character as to render it unique and that disclosure or use
                         thereof in violation of this provision will result in irreparable damage to KineticGold and to independent KineticGold businesses and its Members
                         will be entitled to injunctive relief or to recover damages against any Member who violates the Obligation of Confidentiality.
                         The prevailing party is entitled to an award of attorney’s fees, court costs and expenses.
                         </div>
                       <div class="form-group col-md-12 ">
                        8.4 Return of Materials
                        </div>
                        <div class="form-group col-md-12 ">
                            Upon demand by KineticGold, any current or former Member will return the original and all copies of all “Reports” to KineticGold together with any KineticGold confidential
                            information in such person’s possession.</p>
                        </div>
                        <div class="form-group col-md-12 ">
                        9.0 ADVERTISING, PROMOTIONAL MATERIAL, USE OF COMPANY NAMESKineticGoldEMARKS
                        </div>
                      <div class="form-group col-md-12 ">
                        9.1 Labeling, Packaging, and Displaying Products
                        </div>
                        <div class="form-group col-md-12 ">
                             <ol type="A">
                                <li>Any re-package, refill, or labeling of any KineticGold product, or service, information,
                                materials or program(s) in any way is not allowed without specific permission for KineticGold.
                                </li><li>

                                Such re-labeling or re-packaging violates Federal, and State and Provincial laws, which may result in criminal or civil penalties.</li>
                                <li>KineticGold will permit Members to solicit and make Commercial Sales upon prior written permission from KineticGold.
                                For the purpose of theses Policies and Procedures, the term “Commercial Sale” means the sale of;
                                  <ol type="I">
                                    <li>
                                        KineticGold products that equal or $1000 in a single order;</li>
                                    <li>Products sold to a third party who intends to resell the products</li>
                                  </ol>
                                <li>A Member may sell KineticGold products and services and display the KineticGold trade name at any appropriate display booth (such as trade shows)
                                 upon prior written approval from KineticGold.</li>
                                <li>KineticGold reserves the right to refuse authoriztion to participate at any function that it does not deem a suitable for KineticGold
                                for the promotion of its products and services, or the KineticGold Banking platform</li>
                             </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                        9.2 Use of Company Names and Materials
                        </div>
                        <div class="form-group col-md-12 ">
                           <ol type="A">
                                <li>KineticGold Members must promote the good reputation of KineticGold products and services. The marketing and promotion of the KineticGold opportunity,
                                KineticGold Profit-Sharing Plan, and KineticGold products must be consistent with the public interest, and must avoid all discourteous,
                                deceptive, misleading or immoral conduct and practices </li>
                                <li>All promotional materials supplied or created by KineticGold shall used in their original form and unchanged, amended or altered without prior written approval by
                                KineticGold's Compliance Department.</li>
                                <li>The name of KineticGold, each of its products and names that have utilized by KineticGold in connection with its business are protected trade
                                names, trademarks and service marks of KineticGold. As such, these marks are supplied to Members for their use only in an authorized manner.</li>
                                <li>An KineticGold Member’s use of the name “KineticGold” is restricted to protect KineticGold proprietary rights,
                                ensure that name of "KineticGold" not be lost or compromised by unauthorized use. Use of the KineticGold name on any item not produced by KineticGold
                                 is prohibited except as follows:
                                    <ol type="I">
                                        <li>[Member’s name] KineticGold Member</li>
                                        <li>[Member's name]  Member of KineticGold banking platform and services.</li>
                                    </ol></li>
                                <li>Further procedures relating to the KineticGold name are restricted
                                    <ol type="I">
                                        <li>All stationary (i.e. letterhead, envelopes, and business cards) bearing the KineticGold name or logo intended for KineticGold Members
                                            must be approved in writing by the KineticGold Compliance Department
                                        </li>
                                        <li>“Independent Kinetic Member” in the white pages of the telephone directory under his KineticGold name.</li>
                                        <li>KineticGold Members may not use the name KineticGold in answering his or her telephone, creating a voice message,or an answering KineticGold such
                                            as to give the impression to the caller that they have reached the corporate office. They may state, “Independent KineticGold Member.”</li>
                                    </ol></li>
                                <li>Certain photos and graphic images used by KineticGold in its advertising, and websites have been licensed from outside vendors
                                    and are not availble for use by its members. If a Member wants to use these photos, graphic images, they must negotiate contracts with the vendors for a fee.</li>
                                <li>An KineticGold Member shall not appear on or make use of television or radio, or make use of any other media to promote or discuss KineticGold or its programs,
                                    products or services without prior written permission from the KineticGold Compliance Department.</li>
                                <li>A Member may not produce audio or video clips from a KineticGold even for other then their personal use without KineticGold's written permission from the KineticGold
                                 Compliance Department.</li>
                                <li>KineticGold reserves the right to rescind its prior approval of any sales aid or promotional material to comply with changing laws
                                and regulations and may request the removal from the marketplace of such materials without financial obligation to the affected Member.</li>
                                <li>A Member shall not promote non-KineticGold products or services in conjunction with KineticGold products or services on the same websites or
                                same advertisement without prior approval from KineticGold Compliance.</li>
                            </ol>
                        </div>
                        <div class="form-group col-md-12 ">
                        9.3 Faxes and E-mail – Limitations
                        </div>
                        <div class="form-group col-md-12 ">
                            <ol type="A">
                                <li>Except as provided in this section, a Member may not use or transmit unsolicited faxes, email, mass email distribution, or “spamming” that advertises or promotes the operation
                                of his or her KineticGold business. The exceptions are;
                                    <ol type="I">
                                        <li>Faxes or e-mailing any person who has given prior permission or invitation;</li>
                                        <li>Faxing or e-mailing any person with whom the Member has established a prior business or personal relationship.</li>
                                    </ol></li>
                                <li>In all States, Provinces or Territories where prohibited by law, a Member may not transmit, or cause to be transmitted through a third party,
                                (by telephone, facsimile, computer or other device), an unsolicited advertisement</li>
                            </ol>
                        </div>
                  </div>
             </div>
          </div>
      </div>
  </div>
</div>
       </div>
       </div>
       </div>
       </div> 