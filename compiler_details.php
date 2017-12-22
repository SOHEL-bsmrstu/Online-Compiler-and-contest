<!DOCTYPE html>
<html>
    <head>
        <title>Compiler Details</title>
    </head>

    <body>
      <div style="width: 103%; margin-left: -1%;"><b>
                <?php
                include 'head.php';
                include 'time_controling.php';
                ?>
            </b></div>
        
        <div style="margin-top: 30px; text-align: center;">
            <h2><i>Compiler Overview</i></h2>
        </div>

        <div style="margin-left: 150px;margin-bottom: 100px; margin-top: 50px; margin-right: 150px; font-size: 22px; border: 1px solid blue; text-align: justify;">
            <p><blockquote style="border: none;">A compiler is a special program that processes statements written in a particular programming language and turns them into machine language or "code" that a computer's processor uses. Typically, a programmer writes language statements in a language such as Pascal or C one line at a time using an editor. The file that is created contains what are called the source statements. The programmer then runs the appropriate language compiler, specifying the name of the file that contains the source statements.</blockquote>
            <blockquote  style="border: none;"> When executing (running), the compiler first parses (or analyzes) all of the language statements syntactically one after the other and then, in one or more successive stages or "passes", builds the output code, making sure that statements that refer to other statements are referred to correctly in the final code. Traditionally, the output of the compilation has been called object code or sometimes an object module . (Note that the term "object" here is not related to object-oriented programming.) The object code is machine code that the processor can execute one instruction at a time.</blockquote>
            <blockquote  style="border: none;"> The Java programming language, a language used in object-oriented programming, introduced the possibility of compiling output (called bytecode ) that can run on any computer system platform for which a Java virtual machine or bytecode interpreter is provided to convert the bytecode into instructions that can be executed by the actual hardware processor. Using this virtual machine, the bytecode can optionally be recompiled at the execution platform by a just-in-time compiler.</blockquote>
            <blockquote  style="border: none;"> Traditionally in some operating systems, an additional step was required after compilation - that of resolving the relative location of instructions and data when more than one object module was to be run at the same time and they cross-referred to each other's instruction sequences or data. This process was sometimes called linkage editing and the output known as a load module.</blockquote>
            <blockquote  style="border: none;">A compiler works with what are sometimes called 3GL and higher-level languages. An assembler works on programs written using a processor's assembler language.</blockquote></p>

    </div>

    <?php include 'foot.php'; ?>
</body>
</html>

