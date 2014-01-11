<?php
/*
 * ======================================================================= // File: JPGRAPH_TABLE.PHP // Description: Classes to create basic tables of data // Created: 2006-01-25 // Ver: $Id: jpgraph_table.php 1514 2009-07-07 11:15:58Z ljp $ // // Copyright (c) Asial Corporation. All rights reserved. //========================================================================
 */

// Style of grid lines in table
 1);
D(FINE('TGRID_DO, B)%>
, 2);
(EFINE('TGRID_D, U)%>
2', 3)(

// Type of co, s)%>
, 1);
(EFINE('TIMG_, E)%>
T', 2)(

// --------, -)%>
// CLASS GTextTableCell
// Description:
// Internal class that represents each cell in the table
// ---------------------------------------------------------------------
class {

    public 
i

    public  $iRowSpa =  ,  1;

     = u%>

    public Left = 5, $i = a, ginRight = 5, = $, MarginTop = = 5,  $iMarginBotto =  %>

    public lic $ = Val %>

    private 

    rivate $i = GC, or = '', $i = ontColo%>

    private 

         = rivate $, FF = = FF_FONT1,, $iFS =  = S_%>

    private e = 1 = ;, 

        p = i%>

    private , $iCol = 0 = 

        priv, e $iVertAl =  = 'bo%>

    private ign = 'l = ft';
, 

        pr = vate, $iMerg = d = %>

    private = NULL, = $iPC%>

    private 

      private $ = Table(
        = NULL;

 ,
          private ,
        iGridColor,
        = array(
 
    )%>

    private y',
         = darkg(
        a,
        ',
        
,
         
    )%>

    private );

    pri = ate $(
        GridWeight =,
        array(
     ,
          1,
       ,
        1,
        0
    )%>
    // left,top,bo
    
    private ht;
    privat =  $iG%>

    private ay(
   =     , GRID_SINGLE,
   =      ()%>

    private       TGRID_ = GL, ,
        TGRID = NG, 
    ); / = ef, top,bottom = gh%>

    private  __construct(t = n = ll, 

    = p, ivate = $)
    c
        , $iI->nCon = new = ar(ay();)%>

        
        te $i->IMta = t = '%>
        intar->t =  =  $iCS%>
        , $iC->MArea = '';

%>
        ol = ->
     =      %>
        Val =->ew Text($aVal) =      (
            - $,
            - i
        )%>
     

    w;
      Init(is->iCo)
    =
             ->$this- = Row = $%>
    /

    ialiy ea SetCSIMTarget(own pare, t
    =   ,  $this->iPC = l )
    $
             ->his->iIconC = train = %>
             ->  - 1,
        =   - 1
     %>
        }

  ->function = it($a%>
    


             GetCSIMArea()
     
         (}

  ->function Se !== Ta)
            et, $a lt = ->, $aWinTa%>
        else
              $thi ->%>
    a

     $aTarge SetImageConstrain(CSIMwi, targe)
    =
        get (!         (this->, CSIMa(
            t = $aAlt;,
               }

    f
        ))) o
            ()
    {
   ::   if ($this)%>
        e
        
    ->      return $ = s->iC(
            IMArea,
            
    
        )%>
    e

           r SetCountryFlag(
    f, nction  = etI, ageCo = str, in($aType =  )
    V
        
    ->  if  = new rray($aT()%>
             ->     ->MG_WIDTH,
    (      , T, M, _HEIGHT,      ,   ))) {
 )%>
     

    raphErro SetImage(27015), 
       =  }
,       =  $t)
    s
        nstra-> = ar = new         ( $aTyp, ,,  ,        ,   $aV)%>
     

        }

  SetImageFromString(ryFla, ($aFlag =  $a, cale  =  1.)
     
        00, $->tdSiz = new     {
  (  ,  , $, his->iI, on = )%>
        t();
->     ->this->iIcon->Set(ountr)%>
    a

    0, 0, $a SetRowColSpan(aStdSize), 
    }

 )
     
        SetIm->e($aFile = aScale = %>
         = 10->
    {
  =     $this%>
        new I->nPlot($ = le, %>
    $

    , $aMix) SetMerged

    (  func, ion Se, Image = romS)
    i
         $aSc->e = 1.0 = aMix %>
         {
  ->    $ = his->i%>
         Icon->ot("" =  0, 0,%>
    l

    ix);
    IsMerged()
    i
        ateFro Strin->$aStr);%>
    


    unction  SetNumberFormat(owS)
    n
        an)
 -> {
        $t = ->i%>
    n

    owSpan;
 Set(   $t)
    s
        n = $->olSp->;
 (     )%>
    >

    d = true SetFont(

        , unct, on SetM)
    g
        , $aP->l,  = lg =%>
         {
  ->    = his-%>
         $aFl->
      = $this->%>
        PRow;->    -> $this-(iPCo,  = $, PCol;
 )%>
     

    tion IsM SetFillColor(       )
    e
        s->iM->ged;
    = }

    %>
    o

    umberFor SetFontColor(
      )
    $
        mberF->mat = $aF; =     }

%>
    n

    Set($aTx SetGridColor(   $th, s->iV = l->S, t($aTxt) = 
   , }

     = unct)
    n
        $aFF (, $aFS !== Size)
               {
->      $thi[-> =  = $aF%>
         $t (is->i !== $aFS)
                 ->$this->iFS[ze = $aFSi%>
           (his->iVa !== tFon)
            aFF, ->FS, $aFSiz[); =   }

   %>
        SetF (illColo !== olor)
                {->       $th[s- = GColor %>
    l

      }

    SetGridStyle(ontCol, r($aC = lor),     {
   =     , $this-> = Font)
    l
        lor (
    } !== 

         fun)
            on Se->ridColor($[Le =  $aTop%>
        aBot (tom = !== , $a)
            ht = ->ll)
    {
[   =   if %>
        = (ll)
     !==    $)
            s->iG->dColor[0] [ $ = ft;
    %>
        Top (!== nul !==     )
                $->is->iGridC[lo = ] = $aT%>
     

    f ($aBot SetGridWeight(       =     , this- = iGri, Color[2] = = $a, ottom;
 =     )
     
        ht (== nul !==     )
               $t->s->iGridCol[r[ = = $aRi%>
         (

          fun !==  Set)
            dStyl->$aLeft, $aT[p  = ull, %>
         nu (l, $aRig !== null)
               {
->      if ($[Le = !== null%>
         ($this-> !== Styl)
            ] = $->eft;
      [ i = $aTop !%>
    l

             SetMargin(dStyle, 1] = $a, op;
 ,       if)
    $
        == nu->)
          =   $thi%>
        yle[2->= $aBottom;
 =        %>
        t !==->ull)
      =      %>
        ridSt->e[3] = $aRigh = ;
    }
%>

        
    u

     SetGrid GetWidth(eft =)
    u
          (ull, ->Botto !== ull,) R
             ({
   ->   if ($aLeft [== == l)
       )  
                eight->] = $->eft;
   ( )%>
                 nul =      ->     ->his->iGridWeig()%>
                   if->$aBot->m !== nu(l)
  ->        $this-[iG / idWe[gh)%>
            ; $aRight (!== n->l)
           [$t == >iGridWeigh) ]
                  }

->  fun->ion SetM(r)%>
                ght, = Top, ->Botto->
    {
       ()%>
                = $aL->t;
  ->    $thi(->iMa->inRight = $aRi[ht / 
   [  )%>
            n
                 =  $thi->>iMar->nBottom = $aBo()%>
            
             functi = GetW[dt%>
          else  
             !== nu = l%>
         
        $thi (s->iI->nConst->in[0] [= TIM->WIDTH)[{
   ->      ->   $->is- == o) S
                    =      ->mp = $->is->iI[on->G->WidthH[ight(->
     ->    ->   $this(>iIco)%>
        ( conConst (rain[-> / $tm->0]);
 [     ->   } e[seif ->this->->conC->str == 0])  
            {
      =      -> $this->iIcon-[SetSc->e(1);
[     ->      ->$tmp-> $this->iIcon(>GetW) + t%>
        
 else  
            ->SetSc = ($thi->>iIcon->nstrai[[1] /->tmp[1][;
   ->      ->
   ->       $(mp = ) + h%>
        >
        ight();
  =      -> $iwid-> = $tm[[0];
->      [ else->
     ->     $iw%>
                }
  (   ( if ($t, is->iTa) / e->iCells) + is->i->ow][$this-> + ol]->->al->dir == 0%>
     

       $pwid GetHeight(>iTab)
    -
        this (->iPR->][$th !== PCol) i
            ( (mg);
->      } elseif[($ == ->iTable->) l
                w][$t->s->iP->l]->iVal(>)%>
                     =   $pw->th = ->his->iTable->i()%>
                w][$t->s->iP->l]->iVal(>GetF->tHeight($aImg)[+  / ;
  [  )%>
            e lse 
                th (is->i->ble->iCells[$t[is == Row][$this-) C
                    Width->aImg)-> 2;
    ( )%>
                    
                         = colsp-> = $t->s->iTable->iCe()%>
                    his->->Col]-->ColSpan;(     -> return round([ax / $iwi[th)%>
                c
            is-> = rginL->t + $->is->iMarginRig();
            
            unction  = eigh[($%>
        { else t
            = null)  =  %>
        i
        > (onCon->rain[0->== TIM[_WIDT-> {
   [     ->     $->is->->con == t) l
                     = mp = ->his->i->on->Ge[Width->ight()[
    ->      ->  $t->s->iIcon-(SetSc)%>
        i else 1
            
        =   } e->eif ($->is->iI[onCon->rain[0[ == T->G_HEIG->) {
->         (    $) + i%>
        S
        );
       =      ->$tmp =->this->[Icon-->etWidt[Heigh->);
   ->        %>
        iIcon- SetSc(le((this->iI, onConstr) / n[1] / $t) + ]);
 ->         } +      ->   $tmp = $th%>
    c

    tWidthHe SetAlign(           = iheigh,  = $tmp[1]; =         )
    e
                 $ = ight = 0;
(       }
 )%>
        $this->iTab = >iCells[$t(is->iPRow][)%>
        l]-> = l->di(
             == 0),
            {
     ,
                  $p,
            eight = ,
            this-,
            iTable->
        )%>
        s (! Row][$th(s->iPCol]-, iVal) || ! eight($a(mg);
      ,  } e)) {
            $pheight = $::is->iT(ble->, Cells[$thi, ->iPRow][$t)%>
        -
        tHeig->($aImg) +  =         }
 %>
        owspa->= $this-> = ble->iCell%>
    s

    w][$this AdjustMarginsForGrid()
     
         ro (nd(ma->$ihe > t) p
            owspan (+ $th->->iMarginT[p ) t
                m;
    }

    fun:
                    on  = e%>
                    ign($%>
                , $a ertAlign = ':
                    tom = )%>
                      {
 %>
                = st tolower($aHor:
                    ign = ;%>
                         %>
             
            VertA->gn);
       += hk = ->ray(
      [   *   '%>
         
        righ (t',
 ->     >  ) e
                   (ottom->
         [  ) p
                iddl '
        );:
                        =  %>
                     (! i%>
                , $c k) || ! in_a:
                    y($ = V%>
                    Align%>
                     JpGraphError::
                    ais = L%>
                    011, %>
            V
                 ->
        $ += ->iVe->Align = $aV[rt * lig%>
         
        orAl (ign =->aHor + lign;->   }

   -   < ction->djustM->ginsF[rG - i) 

             if ($ (is->i->l > 0) {
 [  )  
                ->iG idStyle[0]) :
                        =  %>
                         %>
                GLE:             :
                        =  %>
                    wf = %>
                     break;
      :
                        =  %>
                     case%>
            

                 ->$wf = 3;
     +=      ->     break;[   *    %>
        c
        _DOU (BLE2:->     +      ->       $ - f < 4;
  ->      ->     [   - r) ;
            }
     (     ->this->iMar[in) t
                eigh [0] * $wf;
 :
                        =  %>
                         %>
                 > 0  {
         :
                     sw = t%>
                     ($th%>
                 {
               :
                    ase = T%>
                    ID_SI%>
             
            f = 1->             +=     b->ak;
       [   *    %>
        I
    B

             StrokeVGrid( = 3;,    ,    ,        ,     brea, ;
    =  )
     
        $thi = iRow  == $ ? s : R%>
         (((wf = ->
    >   &&      ==  ) || (k;
  ->     +      ->case TGR - D < UBLE:->      ->     [   -   &&  = 3 ==  )) &&     b->ak;
       [      > c)  
            :
 =       ==   ?     : $wf + 4;
     -  %>
            br = ;
  +          -  %>
            $this->iMarginB(ttom -> $this->iG[idWei)%>
                   (
    ->  if ($thi[->iCo)  
                 1 < $this->iTabl:
                        (   =  ; it < ($thi->>iGridStyle[3]) {; ++   )
                        INGLE->    (   +    *      ,    , f  +  1 * 
    ,   )%>
                         %>
                DOUB E:
         :
                        (   =  ;    <   bre->;
         [     ; ++ e )
                             ->    ($w +  = * 4;
  ,    ,    +    *      , br)%>
                       +=   $th->->iMarginRi[ht += * $%>
                     $w (
  =  ;    <     }->

                        functio[ Stro; ++ ri)
                        dth, ->Heig(t, + $a * ir = , )
 ,  { +    *      , / )%>
                    
    %> // For the righ                t we increase the :
                    t w (de = r; se < . Thi->is
        [/ det * r; ++ d )
                        nt.
 ->    ($i + x  *  $aDi,  ==, 1  +  0 * : 3;
,   )%>
                        
                        // We don                    't += oke t-> grid lines[that  * r%>
                    abl (si = c; th < is
  ->    // the [lace ; ++ he)
                        $this->iCol(>  +  & *  $idx, == ,  | +  ( * this-, iC)%>
                    1 < $%>
            i
         
    $

     3)) &&  StrokeHGrid(eight, $id, ] >, 0) {
  ,         , $x =  = a)
    r
             = ase T == I ? I : E%>
        i (((ir, $->;
   >   &&      ==  ) || (ak;
 ->     +      -> 
       -   <      ->se TGR->_DOUB[E: -   &&      ==  )) &&  = 0;->i < $this->[GridW > h) $
               =       ==   ?     :   $ + Img->Lin - (%>
            r, = Y,  + x + $i  -  %>
                 ->        (  $x -> $this->iG[idWei)%>
                   (     ->     for ([i = 0) i
                ight $idx]; ++ $i:
                        (aI = g; Li < $x + -> * $aDir, $[Y, $x; ++ i )
                             ->    (rea, ;
 +   ,   ,    +   )%>
                    
                    e TGR%>
                             for :
                    Gri (ei = h; $i <  * 2;->+ $i)
     [     ; ++   )
                         $i *->aDir( $a, ,  + x , $i, *  + aD)%>
                       += $x +=->this->iGrid[eight * $%>
                        (   = f;  ( < = 0; -> < $this->i[ridWe; ++ [$)
                             ->    (  $, Im + ->, ne, $x + + )%>
                    i * $%>
                            break;:
                     }
 (   = 
; 

                       < nctio->StrokeHGrid[$aImg *  ; ++  $)
                        $aDir-> 1)
(   , 
  +   ,   , /  + op)%>
                       += // Fo->the left we[incre * s%>
                    e r (ht = w; de < ase i-> This is
  [     ; ++ et)
                        n arg->ent.(   ,    +  $, x ,  $ + Di)%>
                     
   %> // We don            '
        t
    i

    s that a Stroke(e edg,  of, the, table s, nce this)
    s
        // the place of the border.
        [ (- 1 &->$idx == && (&& $t->s->i != Weigh->$idx] || ) {
 ->     !=  $y =->aDir ))  
             $aHei%>
         
        $x ( $aX ->$aWidth  != 
 )  
            >SetC->or($this(>iGri->olor[$id)%>
              swi->h ($this->iGrid(tyl, [$i, x]) + {
      -  ,     +     case - T)%>
        :
                =  fo .  ($ .  =  . ; $ . (< $ + his->iG - i) . eig . t[$ . dx] . (++  + i)
     -  ) .     . (    +        $ - I) . ->L . ne( . aX, . (y + + $i, $x,  - y)%>
         (!      (     ->eak;
      ))  
            
                 ->  case TG = _DOUBLE:
                     . or ($i  .  0; $i < $ . his->->ridWeight[$ . dx];
             (!      (     ->$aImg->Line($a)) y
                i);
 ->          .=     $y += $t . is->i->idWeight[$idx] . * 2;%>
             
              (! $i < (this-->GridWeig)) i
                     ->          .= aImg->Li . e($aX->$y + $i, . $x, $y + $i . ;
   ->         .      %>
             
            
                 ->      cas .= RID_DOU%>
         
             ->r ($i = 0; (i < $, his, >iG, idWeigh, [$idx] *)%>
             ->           (     , aIm, ->L, ne($aX,, $y + $i,, - x)%>
        
    ->           (  $y , = $, his, >iGridW, ight[$id)%>
             ->          f(r ($i, = 0,  $i, < $this, >iGridWe, - h)%>
        $i (     ->      !==     ) $
            X, $y  ($i, $-> $y + $i))  
                 bre k;
   :
                       = 
   +  func->on Stroke($%>
                    h, $aHei = ht)
  %>
                    // If this                     is a%>
                ly s roke if :
                ell.         : // The parent cell hol                    ds = e m + rged ->ll block
   +      (( ($this - >iMer->d && ($this - >iRow->= $this->iPR) /  )%>
                    ->iPCol) =  {
     %>
                     }
  %>
                
                ($th s->iBGC:
                       = aIm + ->SetCo - or($t->s->iBGColor) - 
%>
                    ledRecta = gle($aX%>
                     1, $%>
                ;
     :
                    
                    $coords = $a::. ',' ( $aY ,  ',' ->($aX + $a)%>
            '
             ($aX  ($aWid-> - 1) . ',)  
                 1)   ',' :
                    aH = ht  +  1);
->      if (%>
                    rget)) { =      %>
                    a = '%>
                 coo ds="' . :
                "' . $this->i:
                       =     + f (! ->pty($this- + iCSIM((ntarget) -  {
  ->           -  $thi->>iCSIMArea .=) /  )%>
                    IMwintar = et . "\"%>
                         %>
                s->i SIMalt)):
                    is = CSI + Area .=  -   - lt="'-> $this->iCSIM%>
                    his->iCS = Malt . "%>
                         %>
                rea .= :
                         
      ::$this-(Strok, VGrid->aImg, $aX,)%>
            $
                 ->his->->rokeVGrid($aImg, $, X, $aY, )%>
            ht, -->);
  ->    $th(s->St, ok, HG)%>
        $
        $aWid->, $a->ight);
 (     ->this->Stro)%>
        mg, $->, $a-> $aWidt(, $aH->ght,  - 1)->   ,     
->      )%>
        iIcon  (= nul-> {
      )  
            is-> HorAli:
                   = ase + 'left->
          %>
                 + $t%>
            ft;
         :
            ncho  = 'left:
                   = bre + k;
  ->            + case ((enter': -      ->         ca - e 'mi->le':
       ) /  )%>
                + $th%>
            t +  ound(($:
                ar = Lef +  - $thi - ->iMa->inRight) / 2 - ;%>
                   $h%>
            er';
  :
                break;
     ::      (  cas,  'rig->':
      )%>
         
         ( }
  ->    ->  
 !=   &&    sw->ch (->his->iVertA >= ) )  
             ca += t + :
   (     ->    ->   $y = $ * Y +)%>
        r
               (     ->    $vanch) =
                      :
                   =     +  case->center':
 %>
                e 'mi%>
                         :
            is-> MarginTo:
                t  = thi + ->iMa->inTop - $t + is->i((rginBott - m) / ->;
         -      ->    $vanchor ) / ')%>
                $y -= aY + (aHeig-> - 1-> $this->i(argin) / t)%>
                     %>
            otto ';
     :
                ); =     +       }
 -      ->    $this->iI - on->S->Anch->($hanchor( $van)%>
                $this%>
            ke($aIm:
                  }
        ::his->i(al->S, tColo->$this->iFo)%>
         
        is->i->l->S->Font($th(s->iF-> $this->i, S, $t)%>
        ) (     ->switch ($this !== rAli && {
        (   ca-> 'le->'))  
            $x = ->X + ->h = >iMargi(Left;->             ,  brea->
   -> )%>
        '
             ->    ->ase 'm(ddle', 
 ,   )%>
     
 

class           
 

    public         =  defa(), 
      =      (
         ,
         
    )%>

    private  A work = r, nd for t = e%>

    private in the TTF = font, handling in = GD
 %>

    private     // Theancho =  pos%>

    private ted te = t, =90) i =  %>

    private we add
     =    /,  an offset  = ased%>

    private  font siz = 
 %>

    private is->iVal->dir = != 0 &&, $this->iVal->f = n%>

    private ) {
   =      %>

    private  round($t = is->i, al->font_ = ize * %>

             __construct()
     r

    $aHeight Init(is->iM = r, inTop  =  , this->iMar = in)
    t
        ;
   ->     [   = // $y %>
        this-->Val->[et = tHeigh%>
        );
 (   =  ;    <     $->-= ro[nd; ++ is) i
            t($ (Im = );  2 <      ->     [  ; ++ ak)  
                botto->:
    [   [    = new                 //$y = $aY+$aHei(ht-1-$this, >i, ar)%>
                al->G->FontHe[ght[$aI->);
 (     )%>
            a
        g
        s->iM->ginBo = tom %>
    s

    ign, 'to SetBorder(  if ($t = i, ->iNumb = rFormat)
    =
         is_n->eric($this-> = Val->t)%>
             ->this->iVal->t = sprintf(%>
    >
    
    // ---------------------------------------------------------------------
    // CLASS GTextTable
    // De    scription:
// Gscriptio SetPos
(aph, c t)
    t
         ----->----- = ---%>
        ------>----- = ---%>
    -

    -------- SetScalePos(xtT, ble)
    

        ic $i->lls = arra = , $%>
        ray(
->      0,
  =    %>
      // //
    nullNeed to  SetAnchorPos(e they ar,  used by  = he ce)
    

        te $i->dth = 0, = Height = %>
        
        ivate->iColWidt =  NULL, $i%>
    g

     $iBorde SetCellCountryFlag

    (ivate, $iIni,  = fal, e;

    = pri, ate $ = YAn, hor = 'to = ')
    $
        = 'le->';
  ( /*
 )%>
        ------>-----(-----)%>
        ------>------[------[------->-- First and s(cond p, ase con, truct, rs ------)%>
    -
    // Empty
    }

    function Init($aRows = 0, $aCols = 0, $aFillText = '')
    {
      // Empty
    null  $this- SetCellImage(Rows;,      ,   $thi, ->iSize = 1] ,  $aCo = s;
)
     
        ($i =->; $i ( $thi)%>
        ; ++ ->) {
 (     )%>
        j = 0->$j < $[his->i[ize[1]->++ $j) {(      ,        ,  $thi)%>
    l

    $j] = ne SetRowImage(ell($, FillTe, t, $i,  = j);,       =    )
     
        ->iCe->s[$i]($j]->)%>
        ;
  (   =  ;    < 
    ->  }
 [  ; ++ $t) s
            e;
  ->}
    [

                /*[   ->* ------(------, -------, -----)%>
        -
    -

    -------- SetColImage(borde,  of ta, le ---- = ---, ----- = ---)
    -
        ------>-----(-----)%>
        --- (-- =  ;    <     f->ction[Se; ++ de) $
            $aCol-> = 'bl[ck'[
    {->       $(his->i, orderCo, or = )%>
         
    $

    iBorderW SetImage(Weight;
,    }
     = 

        , *
      =  ---, ---- = ----, ------ = ----, ------- = ---, ----- = ---)
    -
        -- (-- Positi !==  gra && f table !== ---- && ---- !== ---- && ------ !== ----) -
            ------>---
 (   */
 )%>
            uncti-> SetP(s($a)%>
                 ->$this(>iXP)%>
             $aX;->     ( $th)%>
          else 

         
            Scal (ePos($aX, !== 
   )
                        = his->iSca%>
             (    $th !== Scal)
                os =  = ;
    }%>
            
                 SetAn = rPos($aX%>
            hor = ' = ')
  ->{
   [   -  %>
            his->iXA = o%>
            
    =   $th->->iYA[ch - r%>
             $aYAncho =  %>
         
          * (-- = -------; -- <= ----; ++ --) -
            --- (-- = ----; -- <= -- S; ++  c) n
                l ---->------[---[---->--------(------, -------, -----)%>
            

         
    c

    etCellCo SetCellImageConstrain( $aFl, g, $a, cale =, 1.0, )
    M
         $aSt->ize =(3)
  )%>
         $thi->>_chk(($aRo)%>
         $thi->>_chkC[$aCol)[
     -> $this->iCells[$a(ow][$a, ol]->)%>
    t

    -------- toString()
     
           = ction SetCellImage($aRow, $aCol, $aFile, $aSca%>
        $aM (x  =  ; 0) <   {
 ->     [th; ++ _c) R
               .= his->_%>
                (   = $; is < Cells->aRow][$a; ++ ->) t
                ca .= $aMix);
                
                ion (SetRo->mage($[Row[ $a->le, $aS)
                     1 .=     %>
                ch .= aRow); .      -> for ([j =[0; -> < $->i%>
                )  .=         .   $th->->iCel[s[$[Row->$j]->Set . le, $aS . ale, ->Mix);
[   [   ->    }

  .   f%>
                e( .= l, $aFi%>
            1
            00 .=   {
   %>
        -
        Co .=         fo%>
         $j <  th%>
    i

    le = nul Set(Scale ,  1.0,  = aMix, = 100) =     )
     
          (ScaleC === == n && && $aM === 2 !=) u
            = (ll && $a(ile !=)) l
                $thi (s->_chkR($aArgR[);))  
                    $a = ;
   (      )%>
                    e  = 
%>
                    eC1 (!= =  ; ll <   ; ++   )
                        le = 
  (     (   if [$aM), R2)%>
                        ($a = i; =  < ix; ++   )  
                        
   (   =  ;    < Mi; ++ = ) h
                             $a (ileR1(= 0;
 [   [   )) $
                                     ->aScaleC1(= , ;
, (string) 
     [  f[r ()%>
                            ) else <
                                $this->iCells[$(][, j])%>
                            i
                         
                     
                    ($aRo-> $aCo[,  = yp%>
                      $th->->_ch[R( = ow%>
                    C($aC->);
   =     %>
                o else s
                    
    }
    
::  /*
 (   * )%>
                -
            - else -
                ----
     */::   fun(tion )%>
            ;
        f else  

                f-> ($j ( 0; $j)%>
            [1]; -> $j) (
     )%>
            = '<t->';
     (      ,    if , (string) Cells[)%>
        e
    


    >iRowSpa SetPadding(       ,      = $t .,  '</ = d>';,      =     ,   }
  =     )
     
        ' (r>'; !==      &&      !== t .= && tabl !== ;
   &&   ret !==  $t;)  
            
            *
   ->* ---(-------)%>
            ------>-----(----)%>
            ------>-----(----)%>
            ecify->ata f(r ta)%>
        - else -
            ----- = -------%>
            
    = /
   ->uncti[n  - e%>
            $aArg1, = A%>
            Arg3 = NULL)->   {
[   -  %>
             if  = A%>
        L
        g3  (== = NULL) {;    <=     ; ++ (i) a
             {
 (   =     ;    <= if (; ++ rr) (
                     ->      [   [m =->ount($aAr(1);
 ,      ,      ,      )%>
            n
         
     

           $ SetRowPadding(     ,      )
    o
        ; $i ->$m; +( $i)
)%>
            (   =  ;    <  = ma->count[$a; ++ [$) )
                 ->      [for ($[ = -> $i < $m;(++ $i,  {
  ,      ,      )%>
        o
     

    j < $n;  SetColPadding(     ,      )
     
        f (is->t($aA(g1[$i)%>
            (   =  ;    <      ->     [  ; ++ is) _
            j, (s->ing) $[Arg[[$i][$->);
      (     ,      ,      ,    } )%>
         
     

             SetCellPadding(etcel, ($i, , j);
 )
     
             ->     (  }
 )%>
             ->     (
    )%>
             ->      [      [      ->his->iSiz([0] =, $m;
 ,      ,      )%>
    $
    // ('Illegal argument to GTextTable::Set(). Arra// ('Illegal argument to GTextTable::Set(). Arra
    nully must b SetTextOrientation(       ,      =   }
,      =     ,  } e = se {,     =     )
     
        aphE (rror !== seL( && 2);
 !==      &&      !==  ('I && al ar !== ent ) G
            t()')->     (      })%>
                 ->else (
   )%> // Must be // Mus
            null-> the (orm )%>
            ,col,->l)
  (    )%>
        > else 

            thi = _chkC($%>
                 = this-->setce[l( - a%>
            g1, $aA = ,%>
            g3); =      ->
    [
  -  %>
            
                 =  %>
        -
        --- (-- = -------; -- <= ----; ++ --) -
            --- (-- =  Cel; ma <=  set; ++  -) -
                ------>------[---[---->----->--------------(---)%>
            u
        t
    n

    gR1, $aC SetRowTextOrientation($aC2 ,  nu)
    ,
        null)->   {
(     )%>
        !== (nu = l; &  < 2 !==->ull &[ $; ++ !=) n
            !== n->l) {
 [      [   ->his-->chkR($aArgR1);(   )%>
        h
    c

    C1);
    SetColTextOrientation(aR2);,    )
     
        is->_->kC($a(2);
 )%>
        se  (
  =  ;    <   $aP-> = $a[rg; ++   )  
             $thi->>iSize[0] [ 1;
  ->    ->  $aArgR1 = 0;(   )%>
        C
    t

    Size[1]  SetCellTextOrientation(0;
  ,      , 
  )
     
        i = $->rgR1;($i <=)%>
        i) {
->     (    f)%>
        C1; $-><= $aC[; ++ $[) {
  ->    ->      $this->i(ell)%>
    j

    j) {
    SetColor(this->i, ells = $aRo, ][$j = ->Se, Marg = n($a, ad, $ = Pad,)
    a
        d (     !== 
    && 

             !== ctio && tCol !== ding && ol, $ !== d)
 ) {
            s->_c->C($aC(l);
   )%>
             for ->j = 0( $j )%>
            0]; +->$j) {(    )%>
                $->is->i(ells)%>
        - else a
            ad, $ = d);
   %>
            
                 = ction->etCel[Pa - d%>
            g($aRow = a%>
              {
 =      ->his->[ch - R%>
            aRow =  %>
        i
        $aC (l) = 
      ; $t <= >iCe; ++ $a) w
            Mar (in = $aPa;  $ <= , $a; ++  $) a
                
                  /*
->   * -[---[---->------------(-----)%>
            -
        -
    -

    -- Cell  SetRowColor(ion s, tting -)
    -
        ------>-----(-----)%>
        --- (-- = -; -- < ------>-----[  ; ++ /
)  
            TextO->entati[n($aAr[R1,->aC1 = null, (aR2 = n)%>
         
     

    null)
   SetColColor(f ($a, 1 !== n)
    l
        !== n->l && (aC2 !)%>
        $aP (d  = =; nu <  {
  ->     [  ; ++ s-) c
            
    ->      [thi[->_chk->$aC1);
     (      $)%>
        (
    ;

           $ SetCellColor(C2);
,      ,  } else)
    

           $a->= $aA(gR1;
)%>
         $aR2-> $thi(->iSi)%>
             ->     $[ArgR1 [ 0;
  ->        $aC2(= $this)%>
    [

    on($aO); SetFillColor(
      ,  }
  =   }
, 

         = unct, on S = tRow, extOr = enta)
    o
        $aO (
    !==      && his- !== hkR( && w);
 !==      &&  ($j  !== ; $j) $
            ]; ++->j) {
(       )%>
            $this->iCell([$aR)%>
            SetOr->ntati(n($a)%>
                 -> }
  ( }

)%>
            tCo (Te = tOrient; io <= Col,; ++ )
)  
                >_c (kC = $aCo; ;
 <=     ; ++ ($) =
                    [0]; -> $j) {[   [   ->   $this->iC(lls[$)%>
                t
            a
          else 

         
            ellTe->Orientat = ($aRow,%>
        O
     

        $thi SetRowFillColor(     ,   $this)
    _
        l);
 ->     (this-)%>
        ow] ($a = o; -> < l->Se->rient[ti; ++ aO) 

            
              /*
->   * -[------[---->------------(-------)%>
        -
    -

    -------- SetColFillColor(tting, -------)
    -
        ------>-----(-----)%>
        --- (-- = -; -- < ------>     [/
; ++ fu) t
            $aArg->, $aC1[= n[ll, $a-> = null, $aC( = null)%>
        u
     

          if SetCellFillColor( $aR2, !== n, ll && $)
    2
         && $->rg !=( null)%>
             ->his->(chkR()%>
             ->    $t[is->_c[kC($aC->;
          ( $this-)%>
    $

             SetFont()
     
               f = ($i = $aArgR1()%>
        ; ( $i) {
  ==   ||   for ($ == $) ;
            ++ $ = {
          ( )%>
            ls[$ = $j]->SetFont(o)%>
             (     }
  ==  )
                
                functio =  SetRowColor($)%>
            else
                is->_ch = R(%>
              fo = $j = -> $j <[$t - i%>
            >iSi = 1%>
                 =    $t->s->iC[ll - [%>
            Row] = ]%>
        l r (     }
  == 
 || 

         functio == t) C
            aCol = 
    {
     ( )%>
            his- = hkC($aCol);
( )%>
             0;  = < $this->iSi(e)%>
            ; ++ = ) {
        ( )%>
            [$i] = Col]->SetFon(C)%>
            r($a = or);
       (})%>
            
            ctio (n SetCel == o)
                 $aColo = )
    {
    ( )%>
            else
                this->_ = hk%>
          else i
            $aCol]->SetF::tColor($aCol)%>
        -
        ------> Fill(colo)%>
        tting->-----(----)%>
        ------>-----(----)%>
        ------>-----(----)%>
            ( * = 
   ; un <= n Se; ++ lC) o
            C1  ( n = ll, ; R2 <= ull,; ++ 2 ) n
                )
   ->
     [  i[ ($->1 !== n(ll &,  $aR,  !== nu)%>
            n
        A
    =

     {
      SetRowFont(->_ch, R($a, rgR1, ;
      =   )
     
        chkC(->C1);
(     )%>
        ->_ (hk = (; R2 <      ->     [th; ++ _c) C
                 ->for ($[ = $aA[gR1->$i <= $(R2; , + $i,  {
    )%>
         
    $

    C1; $j < SetColFont(j) {
,     ,     ,         =  $)
    i
        [$i][->]->Se(FillC)%>
        ;
  (   =  ;    <    }
->     [  ; ++   )  
                 ->    $t[is-[iBGCol-> = $aAr(R1;
,     ,   }
   )%>
        c
    S

    illColor SetCellFont(or)
 ,   {
 ,     ,  $th, s->_chk = ($)
    o
           fo->($j =(0; $j)%>
        Size[->; ++ (j) {
)%>
         $thi->>iCell[[$aRow[[$j]->->tFillCo(or($, Colo, );
    )%>
     

    r);
     SetAlign(}

    fun = tion, SetCellFil = Colo, ($aR = w, $, Col, = $aCo, or)
   =  {
 ,        = this->_c)
    R
         (    $this- !== C($a && ;
   !==    $ && ->iC !== s[$a && [$aCol !== SetF) C
            ;
   ->
    (

                /*
   )%>
            ------>-----(----------)%>
            ------>-----(----)%>
            ------>--- F(nt f)%>
        n else -
            -- (---------- === ----) -
                     */
    ::nction(SetFo)%>
             
             fu (c_num_args ===     ) i
                || $numarg = = 3) {
 %>
            F
            rg(0); =           %>
            t_arg( = 
          ===  ($n ? rgs == 3 :           %>
            func = t_arg->);
  [   -  %>
               else
   =  %>
            ize  = 0;
  ->     [   - a%>
             = $this-> = z%>
         
          $ (R1 = = 0;
     ;    <= aC2 ; ++ hi) >
            
   (   =       $aC1;  0 <=     ; ++ el) i
                || $n->args =[ 7)[{
 ->        ($aR1 =, func_g)%>
             
        C
    u

    _arg(1); SetCellAlign(aR2 =, func_, et_arg(2);,             = $aC2 = f)
    c
        3);
 ->     (   $a)%>
        et_ar->4);
 (     )%>
         func->et_arg[5);
  [      -> if ($nu(args == 7),            )%>
    F

     func_ge SetRowAlign(     ,    else
  ,             =  $aFSize)
     
           } ->se {
(     )%>
        phE (ro = :; ai < (2700->;
   [  ; ++   )  
            r of ->gument[ to GT[xtT->le::SetC(lor()');
 ,       }
   )%>
        >
    (

    
        SetColAlign(($aC1, ;
        , this->_chkR = $aR2);
 )
     
        ->_ch->($aC2(;
   )%>
        i = ($a = 1; $i <  $aR2->++ $i[ {; ++   )  
             $aC1->$j <= [aC2[ ++ $j->{
      (         $, his->iCells)%>
        e
    (

    ) {
     SetNumberFormat(ells[$a, ow][ = j]->, etFo = t($a, F, $ = FS, , aFSiz = );
 )
     
          (

             !== ion  && olFo !== $aCo && aFF, !== FS,  && ize = !== )
  ) 

            ->_ch->($aCo();
    )%>
            for (-> = 0;($i <)%>
            ]; ++->i) {
(    )%>
               $t->s->iC(lls[)%>
        > else $
            ;
    =   }
   %>
            
            on S = ellFo->($aRo[,  - a%>
            l, $aFF = a%>
            10)
 =  {
  ->    $[hi - -%>
            chkR = R%>
         
        _chk (! ($aCol);
(     )) h
            Row][$aCol]-::etFont($aFF,)%>
        *
        --- (-- = -------; -- <= ----; ++ --) -
            --- (-- = ----;  C <= alig; ++ tt) g
                ------>------[---[---->---------------(-----)%>
             
        n
     

    gn($aR1H SetRowNumberFormat(lign ,  nu)
    ,
        ull, ->C2 = (ull, )%>
        ll (! aVArg = '(ent)) 

             if ($aC1VAl::n !== (ull &)%>
        r
        l)  (
  =  ;    <   $th->->_ch[R(; ++ HA) g
               $t->s->_ch[C($aC1[Ali->);
            (thi)%>
        R
     

        $thi SetColNumberFormat(    }, els)
    {
            i->($aR1(Align)%>
        { (!          (   )) a
            eL(27010);
 ::      (  }
 )%>
         
            ($a = 1; li < = 'ce->er';
[  ; ++   )  
             $aHA-> = $aR[HAl[gn;
  ->        $aVArg ( $a)%>
        =
     

    ter' : $ SetCellNumberFormat(  $aR,  = $t, is-)
    S
        1;
  ->     (  $aR)%>
        lign ->0;
  (     )%>
        $thi (! ->iSize[1( - ))  
            1VAlign = 0;::      (}
   )%>
        +
             ->   for[($j = [aC1VAl->n; $j <= $aC2; (+ $)%>
     

    ;
       SetMinColWidth(aCol);
   ,     $th = s->i)
    l
          (bottom' ===    {)  
            chk (($ = R; ); <      ->or ($[ =; ++ $j)  
                ++ $j->{
       [    = is->iCells%>
            e
        H else t
               }
->  }

(   functio)%>
            aCol,->aHorAlign[ $aVertAlig = 'bottom%>
         
     

    >_chkC($ SetMinRowHeight(r ($i = 0; , i < $thi = ->iS)
    e
        * (   * --- === ----) -
            --- (-- = -; -- < ------>-----[--; ++ --) -
                ormat->----------[--- = -----------%>
            -
        - else 

            uncti-> SetN(mberFormat()%>
             null->$aR2 = nul[, $aC2 = nul = aArg = n%>
        

     

    _chkC($a SetGrid(    } el = e, {
      =       $, Arg = $ = ArgR1;
     )
     
        = $ = s->iS->e[0] [ 1;
            = ArgR1-> 0;
 [  %>
        C2  ( $ = h; -> < ze[; ++  1)  
            C1  ( 0 = 
;    <  }
; ++   ) i
                Arg))->
     [   [  J->raphError::R(iseL(27, 13); //)%>
                 stri->
     [  }[   ->   for ($i = (aArgR1; , i <= $aR);
                     ->r ($j [ $a[1; -> <= $aC2; ++($j) {
 )%>
            $
        l
    ]

    SetNumbe SetColGrid(g);
 ,          =  , 
       =  }
    , 

    f = nction SetRo)
    u
        t($aR->, $aF(
    )%>
        thi (-> = c; R( < ow);
->     [if; ++ is) t
                 ->     J[Gra[hError->RaiseL(27013)( // argu)%>
            strin->      [ }
[      ->or ($j = 0; (j < $th)%>
            + $j)->
     [   [  $thi->>iCells[$aRo(][$j]->)%>
        r
    a

          }
 SetRowGrid
    (uncti, n SetCol = u, berForm = t($aCol,  $aF)
  =   {
        )
    h
        ($aCo->;
   (    i)%>
        ing ($a = ); {
 <      ->  JpG[ap; ++ or) R
             // a->ument [ust be[a s->ing
        }(    ,    for ()%>
            his->->ize[0][ ++ $i[ {
->          $t(is->, Cells[$)%>
            umber->rmat($[F);
  [   ->}
    }

   (func, ion Set)%>
        o
    $
    // argument must be a string
  // argument must be a string
    null      }
 MergeRow(his->, Cells[$a = ow][$aCo, ]->SetNu = berForma)
    $
        }
   ->

            /(
    )%>
        ------>----------(-----, -, -----, ------>-----[-- - -, --------, -- Set r)%>
    c

    min size MergeCol(-----, -------- = --------, -------- = --------)
    -
        ------>
    (*/
  )%>
        SetMi->olWidth($a(o, Width,  $aWi->h = n[ll - 
,    {
,        /,  If ther)%>
    l

    argument MergeCells(that, all
,     ,   //, columns  = et set t,  the sam =  width
 )
     
        aWid (th = > null ||      >     ) r
            < $this->iSi::[1]; +( $i) )%>
        c
        Width->
    (    )%>
        $this->iColW(dth[)%>
         = $a->dth;
(    )%>
        }
   ->

   (func)%>
        RowHei = ($aR - wHei + h%>
        t = nu = 
    - {
   +  %> // If there is only one argument this means that all
         (        // rows g// r
        null-> set t[ the [ame h->ght
    ()) f
            = null) {
  ::      ( for , $i =, 0; $,  < $, his-)%>
        {
            $->is->_c[kR($a[owHei->t);
         (  $thi, ->iRow)%>
        wHeig->] = $a[eight[
    ->  }
    (
    
  ,  /*
    )%>
        --- (-- = ----; -- <= ----; ++ --) -
            --- (-- = ----; -- <= id l; ++ se) i
                -- (! (-- == ---- && -- == ----)) -
                     ( */
 -> funct[on [etG->d($aWeig()) 1
                        yle = TGRID_::NGLE)
(   {
,     ,   $r,  = $, his-)%>
                     
                    >iCel->[$i][$[]->[etG->dColor($a(olor,  $aC, lor))%>
                t
            i
        t
    e

    le = TGR SetCSIMTarget({
      ,  $thi = ->_c, kC($aCol);
  =      )
    o
        ;  = < $th->->iSi[e[%>
         { =      ->   $t[is%>
        i][$a = ]-%>
        igh (($ = W; gh < 
 ; ++   )  
            ls[ (i] = $; ol < Se; ++ dC) o
                 (   $this->iC)
                    tG = Style($a . tyle);
        }%>
                else
                    $a = ght = 1,%>
                , $aS->le = T[RID[SIN->E)
    {
    (  , $this)%>
            

        o
     

    j < $thi SetCellCSIMTarget( {
  ,      ,    $this, >iCel = s[$a)
    w
        tGrid->ight((ULL, )%>
             ->     (this-)%>
        ow][$->->SetG[idColo[(NULL,->aColor);
    (       $, his->)%>
    $

    -------- GetCSIMAreas()
    -
        -- =    */->   fu[ct%>
        ow = Row, ->HAlig[ =%>
         $aVA = n %>
        )
  (   = 
;    <  $; ++ ->) h
                (   = t; s- < rg; ++ ls) a
                his-> .= e[1] ->1, $aH[lig[, $->Align);
   ()%>
             
        $
        Align   'cen%>
    $

    n = 'cen _chkC(   {
)
     
        s (! kC($a->l);
 )  
            geCells(0, $::ol, $(his->)%>
        i
        } (

           fu < i || ergeC >= ($aR1->$aC1,[$a)
            aHAlign = 'c::ter', (aVAli, n = ')%>
    0

             _chkR    // //
    null('GTex)
    a
        eCel (! (). S->cifie) e
            e merged is ::t val(d.');)%>
        )
         $t (is->_ < C || 1);
  >=    $t->s->_c[kR)
                 $this->::hkC($a(2);
 ,      )%>
        // Setup the parent c// Setup the parent
    null

    r this m _getScalePos()
     
        his (>iCel->[$aR1][$aC === sMer || )) {
->           === phEr) :
            , $aR1  $aC1%>
        C
               // ("(
            annot->erge alrea,
             merg-> cells in 
        )%>
    g

    1,$aC1), _autoSizeTable(     )
     
        cs = );
  ->    $[hi%>
        $a = [$aC1->>SetA[ig%>
        ,  = a%>
        Al = g%>
            (   =  ; r  <  =; ++ 1;) j
            $j =  %>
                (if = (; ($ < = ; ++  &) $
                   =    (  ,      -> ($thi[->i[ell->$i][$j]->(sMerg))%>
             
               (Graph(rror:->aiseL(2700[, $))  
                ;
   ->          [    =  //((", annot->erge alrea[y m)%>
            t else
                C2)")->          [    =   %>
         
         tr (e) = 
;    <   ; ++   ) 

            
  =  %>
                (

               =  ; 
  <  *; ++ --) -
                -- = ---(--, ------>------[---[---->--------( CSIM))%>
            -
            -- (-----(------>---------[---)) -
                  */
->  functio[ Se = MTa(ge, ($aTa->et, $aAlt[= n)%>
            e else
                $this->iSize[0];[    =  $%>
        >
    [

          $c _setcell(     ,   for, ($i = = 0;)
    i
         $ ( {
  (     ->  for [$j = 0[ $j < )) +
                 ->    if[($aAut[Target->   (     )%>
        $ else  
            $j";
->      [      [else
  = new             $t((string) et;
 ,      ,      )%>
            s[$i]->j]->Se[CSIMTa[get($t->$aAl();
  )%>
        

     

      }

    StrokeWithScale(CSIMT, rget($aR, w, $aCol)
    $
        $aAl (t = null)
(   {
->      $thi) && hkR($aRow)(
    ->  $this->_)) (
               = his->(Cells[$a->w][$aCol](>SetC->MTarget($a))%>
               = 
    (

                /*
 ->  * -----(------>----------))%>
            ------>------(-----, --, --)%>
        t else -
            ------>------(-----)%>
        -
    -

    -------- Stroke(
    , unc = ion , etC = IMAr)
    s
         (    !==  $th && iSi !== ;
  )  
            >iSiz->1];
  =    %>
                 ->for ( = = 0;
         
            =      ->r ($j[= %>
            =      -> $csi[ .%>
        tCSI (MAr == ; ||     ==  )  
                return $::im;
  ( }

 )%>
         
        // Table not initialized
        }
        if ($aCol < 0 || $aCol >= $this->iSize[1])
     // Table not initialized
        null (   =  ; Jp < phE; ++ ::) i
            Col);->      [//[("G->xtTable:\n += mn ar->ment ($aCol) %>
         
         ta (le = s; e. < 
  ; ++ 
 )  
            R($aR->)
    [
  [  -> if (! $thi += Init)->
            %>
        o
        270 (4) =  ;  T < e n; ++ ni) a
             }
 (   =  ;  i < $aR; ++  0) |
                iSize->])
   [   [   ->pGraphError::RaiseL(()%>
              // (//
        null
         }

 -> function _get(caleP)%>
         (   if->$this[>i != eXPos(=== n->l || $thi) || caleY->s ===[nu != {
   (     -> return fa)) 

                 return ::ray(
 (     )%>
        b
        // Get maximum column width and// Get maximum column wid
        null = r%>
            (   =  ;  = < his; ++ iz) 0
             = $th += iSize->];
      [ $w%>
         
        ;
      =  %>
        
        //  (et = m; im < row; ++ gh) p
              for ( +=  0; $->< $m; ++ $[) {%>
         
        i] = m (($h, $this(>iRow->ight[$i]))  
            lse
       :
                wHeig%>
                   }
    :
                
                // Get max// Ge
                null->um co -= dth p(r colu / n)%>
                 0; $%>
             {
         :
                     ->r ($i -= ; $i <%>
                     %>
        =
        $this- (Cells[$i][(j]->G->Width($a)) )
             }
       :
                s->iC%>
            {
           :
            olWi th[$j] =:
                olWid->[$j]) -=      (    } e / s)%>
                this-%>
             = $ ;
      :
                
                ction->setce -= aRow, $%>
                    {%>
        f
        aCol (]->Se->$aVal);
 !==   ) e
                 ->his->iCe(ls[$a->w][$aCol)%>
            bleCe->((string) $aVal( $aRo-> $aCo, );
  ->     ,   $th->->iCe + ls[$aR, w][$a->l]->I + it($thi)%>
         
        
        $aImg =  $aXS->le, $%>
            (
  =  ;    <  (i; ++ me) c
            eXPos =  && i->numer%>
            leY (os = ); 
  <    ; ++  $) =
                mg, $x, = $%>
                 {
 (   =  ;    < this-->troke([aIm[);
->      }
; ++ }
) 

                 
                    g, $aX  += LL, $-> = NULL)
[   + {
 %>
                 
                ULL) {
  =  %>
                Pos ( $ = X;    <      ->$this-[iYP[s =->aY;
    ; ++ }
)  
                    
                    his->iSi += ]; //->ow count
 [   +    %>
                [ // column count
   // column coun
                null->   
  [   [ if->$rc ==(0 || , cc ==, 0) {
,        ,    JpGra)%>
                09);
 +=     }->       
 [   %> // Adjust m            a
             cell += ed on->he weight [f t%>
        a
        // is actually occu// is actually
        null->ing the (eft s->e and top pa)%>
        cell (.
   ->   for ($j =  == j)
            $j) {->         ( $thi->>iCel, s[0][->]->iM, rginT-> += $ + his->i, order->ight; +        )%>
        else $
            rc; (+  = i; {
 <      ->  $this->iCel; ++ i])
                t += ->his->iBor(erWei->t;
   +   ,   }
 ->      + or,  $rc;->+ $i) + {
     -   +      ->r ($j = 0; $j - < ,      ->      +    $thi - - + iCell->$i][$j]->Adju - tM)%>
        i
     
 
;  }
        
        // adjust row and column size depending on cell content
        $this->_autoSizeTable($aImg);
        
        if ($this->iSize[1] != count($this->iColWidth) || $this->iSize[0] != count($this->iRowHeight)) {
            JpGraphError::RaiseL(27008);
            // ('Column and row size arrays must match the dimesnions of the table');
        }
        
        // Find out overall table size
        $width = 0;
        for ($i = 0; $i < $cc; ++ $i) {
            $width += $this->iColWidth[$i];
        }
        $height = 0;
        for ($i = 0; $i < $rc; ++ $i) {
            $height += $this->iRowHeight[$i];
        }
        
        // Adjust the X,Y position to alway be at the top left corner
        // The anchor position, i.e. how the client want to interpret the specified
        // x and y coordinate must be taken into account
        switch (strtolower($this->iXAnchor)) {
            case 'left':
                break;
            case 'center':
                $this->iXPos -= round($width / 2);
                break;
            case 'right':
                $this->iXPos -= $width;
                break;
        }
        switch (strtolower($this->iYAnchor)) {
            case 'top':
                break;
            case 'center':
            case 'middle':
                $this->iYPos -= round($height / 2);
                break;
            case 'bottom':
                $this->iYPos -= $height;
                break;
        }
        
        // Set the overall background color of the table if set
        if ($this->iBGColor !== '') {
            $aImg->SetColor($this->iBGColor);
            $aImg->FilledRectangle($this->iXPos, $this->iYPos, $this->iXPos + $width, $this->iYPos + $height);
        }
        
        // Stroke all cells
        $rpos = $this->iYPos;
        for ($i = 0; $i < $rc; ++ $i) {
            $cpos = $this->iXPos;
            for ($j = 0; $j < $cc; ++ $j) {
                // Calculate width and height of this cell if it is spanning
                // more than one column or row
                $cwidth = 0;
                for ($k = 0; $k < $this->iCells[$i][$j]->iColSpan; ++ $k) {
                    $cwidth += $this->iColWidth[$j + $k];
                }
                $cheight = 0;
                for ($k = 0; $k < $this->iCells[$i][$j]->iRowSpan; ++ $k) {
                    $cheight += $this->iRowHeight[$i + $k];
                }
                
                $this->iCells[$i][$j]->Stroke($aImg, $cpos, $rpos, $cwidth, $cheight);
                $cpos += $this->iColWidth[$j];
            }
            $rpos += $this->iRowHeight[$i];
        }
        
        // Stroke outer border
        $aImg->SetColor($this->iBorderColor);
        if ($this->iBorderWeight == 1)
            $aImg->Rectangle($this->iXPos, $this->iYPos, $this->iXPos + $width, $this->iYPos + $height);
        else {
            for ($i = 0; $i < $this->iBorderWeight; ++ $i)
                $aImg->Rectangle($this->iXPos + $i, $this->iYPos + $i, $this->iXPos + $width - 1 + $this->iBorderWeight - $i, $this->iYPos + $height - 1 + $this->iBorderWeight - $i);
        }
    }
}

/*
 * EOF
 */
?>
