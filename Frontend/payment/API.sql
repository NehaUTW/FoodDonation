/* payement method*/
Number: 4242 4242 4242 4242

Date: Any valid future date

CVV: 111

Name: abc

3D-secure password: 1221

/* API & Plugins (Instamojo) */

Private API Key
test_08e79a72a522be14174b1b86b19
Private Auth Token
test_03ca0438de442a28dce42dcb7b2
Private Salt
c9623b83596641acb96cee85b51d50ec


create table invoice(
    paymentid varchar(50) primary key,
    buyername varchar(200) not null,
    buyeremail varchar(500) not null,
    buyermobile varchar(10) not null,
    buyerstatus varchar(20) not null,
    buyeraddress varchar(5000) not null,
    date datetime default now()
    )


